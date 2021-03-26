
function myFunctionDecode()
{
      var str= document.getElementById("stringToEncode").innerHTML;
   
     var numberTxt = document.getElementById("key").value;
    var amount = parseInt(numberTxt,10);
    amount=amount*-1;
    output=result(str,amount);
    document.getElementById("encodedString").innerHTML=output;
    document.getElementById("demo").innerHTML = "This is  message send from your friend";
}
    var result = function (str, amount){
   console.log(amount);
    if (amount < 0) {
      return result(str, amount + 26);
    }
    
  
    // Make an output variable
    var output = "";
  
    // Go through each character
    for (var i = 0; i < str.length; i++) {
      // Get the character we'll be appending
      var c = str[i];
  
      // If it's a letter...
      if (c.match(/[a-z]/i)) {
        // Get its code
        var code = str.charCodeAt(i);
  
        // Uppercase letters
        if (code >= 65 && code <= 90) {
          c = String.fromCharCode(((code - 65 + amount) % 26) + 65);
        }
  
        // Lowercase letters
        else if (code >= 97 && code <= 122) {
          c = String.fromCharCode(((code - 97 + amount) % 26) + 97);
        }
      }
  
      // Append
      output += c;
  }

  // All done!
  return output;
};
function myFunction(){
    // Wrap the amount
     var str= document.getElementById("stringToEncode").innerHTML;
   
     var numberTxt = document.getElementById("key").value;
    var amount = parseInt(numberTxt,10);
   console.log(amount);
    if (amount < 0) {
      return caesarShift(str, amount + 26);
    }
  
    // Make an output variable
    var output = "";
  
    // Go through each character
    for (var i = 0; i < str.length; i++) {
      // Get the character we'll be appending
      var c = str[i];
  
      // If it's a letter...
      if (c.match(/[a-z]/i)) {
        // Get its code
        var code = str.charCodeAt(i);
  
        // Uppercase letters
        if (code >= 65 && code <= 90) {
          c = String.fromCharCode(((code - 65 + amount) % 26) + 65);
        }
  
        // Lowercase letters
        else if (code >= 97 && code <= 122) {
          c = String.fromCharCode(((code - 97 + amount) % 26) + 97);
        }
      }
  
      // Append
      output += c;
    }
    document.getElementById("encodedString").innerHTML=output;
    // All done!
    document.getElementById("demo").innerHTML = amount+",This is your secret key Share with your friend";
  }