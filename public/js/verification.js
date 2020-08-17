var validation = {
    isEmailAddress:function(str) {
        var pattern =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        return pattern.test(str);  // returns a boolean
    },
    isNotEmpty:function (str) {
        var pattern =/\S+/;
        return pattern.test(str);  // returns a boolean
    },
    isNumber:function(str) {
        var pattern = /^\d+$/;
        return pattern.test(str);  // returns a boolean
    },
    isSame:function(str1,str2){
        return str1 === str2;
    }
};
//alert(validation.isNotEmpty(type.value));
// alert(validation.isNumber(type));

// alert(validation.isEmailAddress(type.value));
// alert(validation.isSame("sf","sf"))
let send = document.getElementById('send')
let email = document.getElementById('email')
let message = document.getElementById('message')
// send.addEventListener('click',function(){

// alert(validation.isNotEmpty(message.value))


// },true)

