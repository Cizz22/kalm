<template>
    <div>
        <div id="video-container" class="container">
            <div id="my-video-chat-window"></div>
             <div id="other-video-chat-window"></div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'video-chat',
    data: function () {
        return {
            accessToken: ''
        }
    },
    methods : {
        getAccessToken : function () {

            const _this = this
            const axios = require('axios')

            // Request a new token
            axios.get('/access_token')
                .then(function (response) {
                    _this.accessToken = response.data
                })
                .catch(function (error) {
                    console.log(error);
                })
                .then(function () {
                    _this.connectToRoom()
                });
        },
        connectToRoom : function () {

            const { connect, createLocalVideoTrack } = require('twilio-video');

            connect( this.accessToken, { name:'cool room' }).then(room => {

                console.log(`Successfully joined a Room: ${room}`);

                const myvideoChatWindow = document.getElementById('my-video-chat-window');
                const otherVideoChatWindow = document.getElementById('other-video-chat-window');

                createLocalVideoTrack().then(track => {
                    myvideoChatWindow.appendChild(track.attach());
                });

                room.on('participantConnected', participant => {
                    console.log(`Participant "${participant.identity}" connected`);

                    participant.tracks.forEach(publication => {
                        if (publication.isSubscribed) {
                            const track = publication.track;
                            otherVideoChatWindow.appendChild(track.attach());
                        }
                    });

                    participant.on('trackSubscribed', track => {
                        otherVideoChatWindow.appendChild(track.attach());
                    });
                });
            }, error => {
                console.error(`Unable to connect to Room: ${error.message}`);
            });
        }

    },
    mounted : function () {
        console.log('Video chat room loading...')

        this.getAccessToken()

    }
}
</script>

<style>
/* #video-container div {
   display: flex;
    justify-content: space-evenly;
    align-items: center;
    padding-top: 150px;
}


#video-container div video {
   width: 51%;
    height: 308px;
} */

#video-container {
  width: 700px;
  height: 500px;
  max-width: 90vw;
  max-height: 50vh;
  margin: 50px auto;
  border: 1px solid #099dfd;
  position: relative;
  box-shadow: 1px 1px 11px #9e9e9e;
  background-color: #fff;
}
#my-video-chat-window video {
  width: 30%;
  height: 30%;
  position: absolute;
  left: 10px;
  bottom: 10px;
  border: 1px solid #fff;
  border-radius: 6px;
  z-index: 2;
  cursor: pointer;
}
#other-video-chat-window video {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  z-index: 1;
  margin: 0;
  padding: 0;
  cursor: pointer;
}
</style>
