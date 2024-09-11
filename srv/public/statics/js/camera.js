jQuery(document).ready(function($) {
	/*$("#photoCapture").click(function(e) {
		e.preventDefault();
		if ("mediaDevices" in navigator && "getUserMedia" in navigator.mediaDevices) {
			navigator.mediaDevices.getUserMedia({video: true, width: 100, height: 100}).then(() => {
				navigator.mediaDevices.enumerateDevices().then(res => {
					console.log(res);
				});
			}).catch(err => {
				console.warn(err);
				info("danger", "Veuillez activer votre caméra");
			});
		} else {
			info("danger", "Votre navigateur ne prend pas en charge la caméra");
		}
	});*/

	/**
	* Rogner l'image
	*/
	/**/
});
const webcamElement = document.getElementById('webcam');
const canvasElement = document.getElementById('canvas');
const snapSoundElement = document.getElementById('snapSound');
const btn = document.getElementById('snap');
const webcam = new Webcam(webcamElement, 'user', canvasElement, snapSoundElement);
window.addEventListener('load', function () {
	webcam.start()
	   .then(result =>{
	      console.log("Prêt à scanner");
	   })
	   .catch(err => {
	       console.log(err);
	   });
});
btn.addEventListener('click', () => {
	const img = webcam.snap();
	$("#camPreview img").attr('src', img);
});
// Envoyer l'image de la photo
function sendImage(src) {
  var id = null;
  var userId = window.location.search.split('=')[1];
  if (userId) {
    id = parseInt(userId, 10);
  }
  var token = $.cookie('csrf_scolage');
  var url = "/ajax/upload-avatar?id=" + id;                
  var image = $('#original img').attr('src');
  console.log(image);
  /*var base64ImageContent = image.replace(/^data:image\/(png|jpg|webp);base64,/, "");
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
      });*/
}
// COnvertir l'image en Blob
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
// Rognage de l'image
$("#camPreview img").cropper({
		dragMode: 'crop',
		initialAspectRatio: 1/1,
		aspectRation: 1/1,
		viewMode: 2,
		dragMode: 'crop',
		scaleX: 1,
		scaleY: 1,
		crop: (event) => {
			const x = Math.round(event.detail.x);
			const y = Math.round(event.detail.y);
			const w = Math.round(event.detail.width);
			const h = Math.round(event.detail.height);
			$("#x").val(x);
			$("#y").val(y);
			$("#w").val(w);
			$("#h").val(h);
		},
		cropend: (e) => {
			//e.target.cropper.setAspectRatio(1);
		}
	});