function copyToClipboard() {
  
    var textToCopy = document.getElementById("copyText").innerText;

 
    var tempInput = document.createElement("input");
    tempInput.value = textToCopy;

    
    document.body.appendChild(tempInput);

   
    tempInput.select();
    tempInput.setSelectionRange(0, 99999); 
    document.execCommand("copy");

    
    document.body.removeChild(tempInput);

    
    alert("Text copied to clipboard: ");
}
