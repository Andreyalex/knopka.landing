ConvertForms.Helper.onReady(function(e){var s,d;"undefined"!=typeof Dropzone&&(s=ConvertForms.Helper.getBaseURL("task=field.ajax&field_type=fileupload"),d=ConvertForms.Helper.getCSRFToken(),Dropzone.autoDiscover=!1,Dropzone.prototype.defaultOptions.dictFallbackMessage=ConvertForms.Helper.text("COM_CONVERTFORMS_UPLOAD_FALLBACK_MESSAGE"),Dropzone.prototype.defaultOptions.dictFileTooBig=ConvertForms.Helper.text("COM_CONVERTFORMS_UPLOAD_FILETOOBIG"),Dropzone.prototype.defaultOptions.dictInvalidFileType=ConvertForms.Helper.text("COM_CONVERTFORMS_UPLOAD_INVALID_FILE"),Dropzone.prototype.defaultOptions.dictResponseError=ConvertForms.Helper.text("COM_CONVERTFORMS_UPLOAD_RESPONSE_ERROR"),Dropzone.prototype.defaultOptions.dictCancelUpload=ConvertForms.Helper.text("COM_CONVERTFORMS_UPLOAD_CANCEL_UPLOAD"),Dropzone.prototype.defaultOptions.dictCancelUploadConfirmation=ConvertForms.Helper.text("COM_CONVERTFORMS_UPLOAD_CANCEL_UPLOAD_CONFIRMATION"),Dropzone.prototype.defaultOptions.dictRemoveFile=ConvertForms.Helper.text("COM_CONVERTFORMS_UPLOAD_REMOVE_FILE"),Dropzone.prototype.defaultOptions.dictMaxFilesExceeded=ConvertForms.Helper.text("COM_CONVERTFORMS_UPLOAD_MAX_FILES_EXCEEDED"),e.forEach(function(i){var e=i.querySelectorAll(".cfupload"),p=[];e.forEach(function(n){var e=n.closest(".cf-control-input").querySelector(".cfup-tmpl"),t=e.innerHTML;e.closest(".cf-control-input").removeChild(e);var o=(o=parseFloat(n.getAttribute("data-maxfilesize")))||null,r=(r=parseInt(n.getAttribute("data-maxfiles")))||null,a=i.querySelector("button.cf-btn"),l=new Dropzone(n,{url:s,previewTemplate:t,maxFilesize:o,uploadMultiple:1!=r,maxFiles:r,acceptedFiles:n.getAttribute("data-acceptedfiles"),autoProcessQueue:!0,parallelUploads:1,filesizeBase:1e3,createImageThumbnails:!1,timeout:36e5});a&&(l.on("queuecomplete",function(){a.classList.remove("cf-disabled")}),l.on("processing",function(){a.classList.add("cf-disabled")})),l.on("sending",function(e,t,o){o.append("form_id",n.closest("form").querySelector("input[name='cf[form_id]']").value),o.append("field_key",n.getAttribute("data-key")),t.setRequestHeader("X-CSRF-Token",d),o.append(d,1)}),l.on("success",function(e){var t=e.xhr.response;try{t=JSON.parse(t)}catch(e){var o=t.match(/{([^}]*)}/i);null!==o?t=JSON.parse(o[0]):alert("Error! "+e+"<br>"+t)}var r=document.createElement("input");r.setAttribute("type","hidden"),r.setAttribute("name",n.dataset.name),r.setAttribute("value",t.file),e.previewTemplate.appendChild(r)}),p.push(l)}),i.addEventListener("beforeSubmit",function(e){var r;e.defaultPrevented||(r=0,p.forEach(function(e){var t=e.getQueuedFiles().length,o=e.getUploadingFiles().length;r=r+t+o}),0<r&&(e.preventDefault(),e.detail.error=e.detail.instance.text("ERROR_WAIT_FILE_UPLOADS")))}),i.addEventListener("success",function(){p.forEach(function(e){e.removeAllFiles()})})}))});
