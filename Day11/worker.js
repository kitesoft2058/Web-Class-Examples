var n=0;
// while(true){
// 	n++;
// 	// document.getElementById('hh').innerHTML=n;
// 	//worker에서는 UI변경을 못함.

// 	//worker사용자에게 출력값 전달..
// 	postMessage(n);

// 	//while문은 닷홈 서버에서 다소 처리속도 문제로 잘 구동되지 못함.
// }



function fff(){
	n++;

	postMessage(n);

	setTimeout(fff, 500);
}

fff();