var _URL = window.URL || window.webkitURL;
$("#project_thumb_image").change(function (e) {
    var file, img;


    if ((file = this.files[0])) {
        img = new Image();
        img.onload = function () {
            alert(this.width + " " + this.height);
            if (this.width < 1000 || this.height < 1000) {
                $("#project_thumb_image_error").html("File size not minimum size 1000x1000");
                $("#project_thumb_image").reset();
                return false;
            }

        };
        img.onerror = function () {
            alert("not a valid file: " + file.type);
        };
        img.src = _URL.createObjectURL(file);


    }

});