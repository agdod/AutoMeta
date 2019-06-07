// javascript function for calling image file to be anasyled 
// and gathering and output of the keywords -retreieved from the xml file



function anaylseVisionCall() {
  let json = JSON.stringify ({
    fileName : document.getElementById("fileNameInput").value,
    Request : "label,landscape,face,object,safe"
  })
  var fileName = document.getElementById("fileNameInput").value;
  
  document.getElementById("keywordlist").innerHTML = "Analying image please wait......";
  //document.getElementById('drag_upload_file').innerHTML ="<img src=fileName width='500'></img>";
  ajax_file_upload(fileName,'myVision.php');
           //loadfile();
  //formData.append(fileName,fileInputName.value)
   /* const xhttp = new XMLHttpRequest();
    *xhttp.onreadystatechange = function () {
    *    if (this.readyState== 4 && this.status == 200) {   
    *        document.getElementById("keywordlist").innerHTML = "Analying image please wait......";
     *       loadfile();
      *  }
*
 *   } 
  *  xhttp.open("POST","myVision.php",true); */
    //xhttp.setRequestHeader('Content-type', 'application/json; charset=utf-8');
    //document.getElementById("demo").innerHTML = "Analying image please wait......";
    /*xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");*/

    //xhttp.send(json);

}