<?php 

	header('Content-Type: text/event-stream');

	$id= $_GET['id'];
	$msg = $_GET['msg'];

	echo "retry: 10000".PHP_EOL; //간격 조절..
	echo "id: $id".PHP_EOL;
	echo "data: msg - $msg" . PHP_EOL;// End Of Line
	echo "\n";


// 	Event Stream Format

// 소스에서 이벤트 스트림을 보내는 것은 SSE 형식인 text/event-stream Content-Type을 사용하여 일반 텍스트 응답을 작성하면서 수행되며 기본 형식에서 응답에는 "data :" 행 다음에 메시지가 오고 스트림 뒤에는 두 개의 "\n"문자가 있어야 스트림을 끝낼 수 있습니다.

// data: My message\n\n
// Multiline Data

// 메시지가 길면 여러 개의 "data :"행을 사용하여 메시지를 분할 할 수 있습니다. "data :"로 시작하는 두 줄 이상의 연속 된 줄은 하나의 데이터 조각으로 간주되어 하나의 메시지 이벤트 만 발생합니다. 각 행은 단일 "\ n"으로 끝나야합니다 (마지막 행은 2로 끝나야 함). 메시지 처리기에 전달 된 결과는 개행 문자로 연결된 단일 문자열입니다. 예 :

// data: first line\n
// data: second line\n\n
// e.data에 "first line \ second line"을 생성합니다. 그런 다음 e.data.split ( '\ n') .join ( '')을 사용하여 "\ n"문자를 다시 생성 할 수 있습니다.

// Send JSON Data

// 여러 줄을 사용하면 구문을 깨지 않고 JSON을 쉽게 보낼 수 있습니다.

// data: {\n
// data: "msg": "hello world",\n
// data: "id": 12345\n
// data: }\n\n
// 해당 스트림을 처리 할 수있는 클라이언트 측 코드

// source.addEventListener('message', function(e) {
//   var data = JSON.parse(e.data);
//   console.log(data.id, data.msg);
// }, false);
// Associating an ID with an Event

// "id :"로 시작하는 줄을 포함시켜 스트림 이벤트와 함께 고유 한 ID를 보낼 수 있습니다.

// id: 12345\n
// data: GOOG\n
// data: 556\n\n
// ID를 설정하면 브라우저가 마지막 이벤트를 추적하여 서버 연결이 끊어지면 특수한 HTTP 헤더 (Last-Event-ID)가 새 요청으로 설정됩니다. 이렇게 하면 브라우저가 어떤 이벤트를 실행하기에 적합한 지 스스로 결정할 수 있게 됩니다. message 이벤트는 e.lastEventId 속성을 포함합니다




 ?>