
var data;
onmessage= function(event){
	data= "받은 메세지 : "+ event.data;
	postMessage( data );

	//3초후 변경된 메세지 전달..
	setTimeout( kkk, 3000);
}

function kkk(){
	postMessage( data+" 축하합니다!!");
}





