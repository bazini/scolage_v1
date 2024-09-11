feather.replace();
if ("mediaDevices" in navigator && "getUserMedia" in navigator.mediaDevices) {
  const controls = document.querySelector('.controls');
  const cameraOptions = document.querySelector('.video-options>select');
  const video = document.querySelector('video');
  const canvas = document.querySelector('canvas');
  const screenshotImage = document.querySelector('img');
  const buttons = [...controls.querySelectorAll('button')];
  let streamStarted = false;

  const [play, pause, screenshot] = buttons;

  const constraints = {
    video: {
      width: {
        min: 1280,
        ideal: 1920,
        max: 2560,
      },
      height: {
        min: 720,
        ideal: 1080,
        max: 1440
      },
    }
  };

  const getCameraSelection = async () => {
    const devices = await navigator.mediaDevices.enumerateDevices();
    const videoDevices = devices.filter(device => device.kind === 'videoinput');
    const options = videoDevices.map(videoDevice => {
      return `<option value="${videoDevice.deviceId}">${videoDevice.label}</option>`;
    });
    cameraOptions.innerHTML = options.join('');
  };

  play.onclick = () => {
    if (streamStarted) {
      video.play();
      play.classList.add('d-none');
      pause.classList.remove('d-none');
      return;
    }
    if ('mediaDevices' in navigator && navigator.mediaDevices.getUserMedia) {
      const updatedConstraints = {
        ...constraints,
        deviceId: {
          exact: cameraOptions.value
        }
      };
      startStream(updatedConstraints);
    }
  };

  const startStream = async (constraints) => {
    const stream = await navigator.mediaDevices.getUserMedia(constraints);
    handleStream(stream);
  };

  const handleStream = (stream) => {
    video.srcObject = stream;
    play.classList.add('d-none');
    pause.classList.remove('d-none');
    screenshot.classList.remove('d-none');
    streamStarted = true;
  };

  getCameraSelection();

  cameraOptions.onchange = () => {
    const updatedConstraints = {
      ...constraints,
      deviceId: {
        exact: cameraOptions.value
      }
    };
    startStream(updatedConstraints);
  };

  const pauseStream = () => {
    video.pause();
    play.classList.remove('d-none');
    pause.classList.add('d-none');
  };

  const doScreenshot = () => {
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    canvas.getContext('2d').drawImage(video, 0, 0);
    const src = canvas.toDataURL('image/webp');
    screenshotImage.src = src;
    screenshotImage.classList.remove('d-none');
    sendImage(src);
  };

  pause.onclick = pauseStream;
  screenshot.onclick = doScreenshot;
}

function base64ToBlob(base64, mime) {
    mime = mime || '';
    var sliceSize = 1024;
    var byteChars = window.atob(base64);
    var byteArrays = [];

    for (var offset = 0, len = byteChars.length; offset < len; offset += sliceSize) {
        var slice = byteChars.slice(offset, offset + sliceSize);

        var byteNumbers = new Array(slice.length);
        for (var i = 0; i < slice.length; i++) {
            byteNumbers[i] = slice.charCodeAt(i);
        }

        var byteArray = new Uint8Array(byteNumbers);

        byteArrays.push(byteArray);
    }

    return new Blob(byteArrays, {type: mime});
}
function sendImage(src) {
  var id = null;
  var userId = window.location.search.split('=')[1];
  if (userId) {
    id = parseInt(userId, 10);
  }
  var token = $.cookie('csrf_scolage');
  var url = "/ajax/upload-avatar?id=" + id;                
  var image = $('.screenshot-image').attr('src');
  var base64ImageContent = image.replace(/^data:image\/(png|jpg|webp);base64,/, "");
  var blob = base64ToBlob(base64ImageContent, 'image/png');                
  var formData = new FormData();
  formData.append('avatar', blob);

  $.ajax({
      url: url, 
      type: "POST", 
      cache: false,
      contentType: false,
      processData: false,
      data: formData,
      beforeSend: function (xhr){ 
        xhr.setRequestHeader("Authorization", "Bearer " + token); 
      }
    })
      .done(function(e){
        if (!e.error) {
          window.location.href = window.location.origin + '/photo/crop?id=' + id;
        }
      });
}