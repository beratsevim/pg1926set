sayi = prompt("Lütfen mükkemmel sayı olup olmadığını kontrol etmek istediğiniz sayıyı giriniz..");
var toplam = 0;
for (var i=1; i < sayi ; i++) {
    if (sayi%i==0)
             {
                toplam=toplam+i;	
             }
         }
     if (toplam==sayi){  
            alert("Girdiğiniz sayi mükemmel sayıdır. " + sayi + " !");	 
     }
     else if(toplam!=sayi){
            alert("Girdiğiniz sayi mükemmel sayı değil ! " + sayi + " !");
     } 


