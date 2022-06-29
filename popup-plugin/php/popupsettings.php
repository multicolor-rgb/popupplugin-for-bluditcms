<link rel="stylesheet" type="text/css" href="<?php echo HTML_PATH_ROOT;?>bl-plugins/tinymce/css/tinymce_toolbar.css">
<script src="<?php echo HTML_PATH_ROOT;?>bl-plugins/tinymce/tinymce/tinymce.min.js?version=5.4.1"></script>
<script>
	$(document).ready(function() {
    $(document).on('submit', '#editform', function() {
      // do your things
      return true;
     });
});
</script>

<style>
.popnone{
	display:none;
}

.successPopup{
	width:90%;
	margin:0 auto;
    padding:15px;
    background:green;
    border-radius:5px;
    display:none;
}

.successPopupShow{
    display: block !important;
}

#editform{
	text-align:center;
}
	</style>
 

 <div class="bg-light border p-3">
	<h4>How to use it?</h4>
	<ul class="p-0 m-0 ml-3 mt-2" style="list-style-type:square">
		<li>Turn on your popup</li>
		<li>Config your cookie (this create cookies after close popup, and don't shows before the date expires)</li>
		<li>Config content</li>
		<li>Save and check frontend</li>
	</ul>
 </div>


<label>Turn on Popup</label>

<select name="popup-checkbox">
<option value="on" <?php echo ($this->getValue('popup-checkbox')==="on"?"selected":"");?>>On</option>
<option value="off" <?php echo ($this->getValue('popup-checkbox')==="off"?"selected":"");?>>Off</option>
</select>


 
<div class="popuperContenter" style="width:100%;">

<label>Popup date expires examples  <code>Fri, 1 Jan 2100 00:00:01 GMT</code> </label>


<select id="date"  name="datePicker">
  <option value="7days" <?php echo ($this->getValue('datePicker')==="7days"?"selected":"");?> >7 days</option>
  <option value="1month" <?php echo ($this->getValue('datePicker')==="1month"?"selected":"");?> >1 month</option>
  <option value="1year" <?php echo ($this->getValue('datePicker')==="1year"?"selected":"");?> >1 year</option>
</select>

<label>Cookies end date</label>
<input name="popupdata" class="this-date form-control" placeholder="date expires" type="input" value ="<?php echo $this->getValue('popupdata');?>">

 
<label >Content popup</label>
<textarea id="popupbody" name="post-content"  >
	
<?php echo $this->getValue('post-content');?>
</textarea>







<script>

 

	// Insert an image in the editor at the cursor position
	// Function required for Bludit
 

	tinymce.init({
		selector: "#popupbody",
		auto_focus: "popupbody",
		element_format : "html",
		entity_encoding : "raw",
		skin: "oxide",
		schema: "html5",
		height:"400px",
		statusbar: false,
		menubar:false,
		branding: false,
		browser_spellcheck: true,
		pagebreak_separator: PAGE_BREAK,
		paste_as_text: true,
		remove_script_host: false,
		convert_urls: true,
		relative_urls: false,
		valid_elements: "*[*]",
		cache_suffix: "?version=5.4.1",
		
		plugins: ["code autolink image link pagebreak advlist lists textpattern table"],
		toolbar1: "formatselect bold italic forecolor backcolor removeformat | bullist numlist table | blockquote alignleft aligncenter alignright | link unlink pagebreak image code",
		toolbar2: "",
		language: "en",
		content_css: "/bl-plugins/tinymce/css/tinymce_content.css"
	});
 



let date = new Date();


document.querySelector('#date').addEventListener('change',()=>{

	if(document.querySelector('#date').value == "7days"){
date = new Date();
	date.setDate(date.getDate() + 7);
console.log(date);
document.querySelector('.this-date').value = date;

}

if(document.querySelector('#date').value == "1month"){
	date = new Date();
	date.setDate(date.getDate() + 30);
console.log(date);
document.querySelector('.this-date').value = date;

}

if(document.querySelector('#date').value == "1year"){
	date = new Date();
	date.setDate(date.getDate() + 365);
console.log(date);
document.querySelector('.this-date').value = date;

}

});

</script>

</div>


<div class="bg-light col-md-12 mt-5 py-3 d-block border text-center">
      
	  <p>If you want support my work, and you want saw new plugins:) </p>

	  <a href="https://www.paypal.com/donate/?hosted_button_id=TW6PXVCTM5A72">
	  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif"  />
	  </a>
	  
	  </div>

 
 

            
      
      			
				
		
		
		
        
