
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
    
  
    var output = "";
  
    for (var i = 0; i < str.length; i++) {
     
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
  
     
      output += c;
  }
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
  
    var output = "";
  
    
    for (var i = 0; i < str.length; i++) {
     
      var c = str[i];
  
     
      if (c.match(/[a-z]/i)) {
      
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
  
    
      output += c;
    }
    document.getElementById("encodedString").innerHTML=output;
   
    document.getElementById("demo").innerHTML = amount+", is your secret key "+"<br>Encoded Message";
  }