<?php
echo date('H:i',time() + 7200)."<br>";
if(date('H:i',time() + 7200)>'6.00' AND date('H:i',time() + 7200)>'10.00'){
    echo ("Günaydın");
}
else if(date('H:i',time() + 7200)>'10:00' AND date('H:i',time() + 7200)<'17:00'){
    echo ("İyi günler");
}
else if(date('H:i',time() + 7200)>'17:00' AND date('H:i',time() + 7200)<'20:00'){
    echo ("İyi akşamlar");
}
else if(date('H:i',time() + 7200)>'20:00' AND date('H:i',time() + 7200)<'00:00'){
    echo ("İyi geceler");
}
else if(date('H:i',time() + 7200)>'00:00' AND date('H:i',time() + 7200)<'06:00'){
    echo ("Esenlikler dilerim");
}

?>