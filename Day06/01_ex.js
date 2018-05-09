// HTML에서 body안에 했던 작업들 모두 스크립트로 처리 가능!
// 화면에 Text 출력.
		document.write('Hello world!!');

		// 줄바꿈안됨...
		document.write('자동 줄바꿈 안됨. 하려면..<br>태그 이용');

		document.write('<hr/>');
		// HTML 문법을 직접 스크립트로 작성.
		document.write('<a href="">이런식으로 HTML문법 적용가능</a>');


		document.write('<hr/>');
		// 자바스크립트는 프로그래밍 언어여서 이런것도 가능!
		var a= new Date();
		document.write(a);

		document.write('<br/>');
		for(var i=0; i<10; i++){
			document.write(i+" , ");
		}


		//이벤트에 따른 동적 처리도 가능.
		function aaa(){

			// body영역을 모두 생성한 후 다시 document.wirte()를 하면 화면이 갱신됨.
			// document.write('clicked button');
			alert('clicked button');
		}		