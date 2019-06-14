// To check from URL if upload was successful and prints text based on the result
//  if(window.location.href.indexOf("upload1") > -1) {
//       document.getElementById('uploadstatus').innerHTML += 'Upload successful.';
//}
//    else if(window.location.href.indexOf("upload0") > -1) {
//        document.getElementById('uploadstatus').innerHTML += 'Upload failed.<br>Why? I dont have enough intelligence yet to tell you. Maybe your file was too big. Or your picture too stupid.';
//} 

// drag and drop javascript
  var fileobj;
  var control = document.getElementById("dragNdrop");
  control.addEventListener("change", function(event){
    var i=0,
     files = control.files,
      len = files.length;
      for (; i<len; i++) {
        console.log("filename : " +files[i].name);
        console.log("@Type  :" + files[i].type);
        console.log("size: " + files[i].size+"bytes");
      }
  },false);

  function upload_file(e) {
    e.preventDefault();
    for (i = 0;i<e.dataTransfer.files.length; i++){
    fileobj = e.dataTransfer.files[i];
    ajax_file_upload(fileobj,'callvision.php');
  }
  }
 
  function file_explorer(input) {
   alert("you click the div");
        var reader = new FileReader (input)
        reader.onload = function(event) {
        var dataUri = event.target.result;
          img = document.createElement("img");
          img.src = dataUri
          document.getElementById('drop_file_zone').appendChild(img);
        };
    reader.onerror = function(event) {
      console.error("file could not be read code" + event.target.error.code);
    };
  reader.readAsDataUri(file);//innerHTML = "<div class='loader'></div>";
      
        
       document.getElementById("keywordlist").innerHTML = "Analying image please wait......<br/><div class='loader'></div>";
      ajax_file_upload(fileobj,'callvision.php');
    };
  
 
  function ajax_file_upload(file_obj,action) {
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
      $.ajax({
        type: 'POST',
        url: action,
        contentType: false,
        processData: false,
        data: form_data,
        //dataType: 'json',
        success:function(response) {
          // response is returned as JSON string
          // convert to object using JSON.parse
          var obj_response = JSON.parse(response);
          if (obj_response.status=='invalid') {
            //invlaid file format
            $("#err").html("Invalid File!").fadeIn();
          }
          else {  
            //view upload file.
            //$("#preview").html('<img src="' +obj_response.path+'">').fadeIn();
            //$("#file_name").html(response).fadeIn();
            //$("#form")[0].rest();
            loadfile(obj_response.path,obj_response.name);
            $('#selectfile').val('');
          }
          //alert(response);
          //$('#selectfile').val('');
        }
      });
    }

  }