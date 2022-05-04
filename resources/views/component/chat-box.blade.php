<head>
    <link href="{{ asset('css/chat-box.css') }}" rel="stylesheet">
</head>
<!-- 1 -->
<div class="container">
    <div id="chat-container" class="chat-container">
    <div class="btnBody">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
                <filter id="gooey">
                    <!-- in="sourceGraphic" -->
                    <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
                    <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="highContrastGraphic" />
                    <feComposite in="SourceGraphic" in2="highContrastGraphic" operator="atop" />
                </filter>
            </defs>
        </svg>
            <button id="gooey-button" value="Toggle" onclick="toggle()">
            Hello. How can i help you?
            <span class="bubbles">
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
            </span>
        </button>
        </div>
    <div class="chat-box">
    <!-- 2 -->
    <!-- <button id="q2" class="custom-btn btn-11">Who are you? | what do you do?</button>-->
    <div id="box" class="box">
            <div class="bot"> Hello ! </div>
            <div class="bot"> How i can help you ? </div>
        </div>

        <div class="buttons">
            <button id="q1" type="button" class="custom-btn btn-11">Who are you? | what do you do?</button>
            <p id="a1" class="" style="display: none;"> I’m your virtual assistant here to help </p>

            <!-- 2 -->
            <button id="q2" class="custom-btn btn-11">What this website is used for?</button>
            <p id="a2" class="" style="display: none;">Social College Network is where you can find and share your queries and information</p>

                <!-- 3 -->
            <button id="q3" class="custom-btn btn-11">How to use the website?</button>
            <p id="a3" class="" style="display: none;">First you need to sign in and start to interact with other students </p>

                <!-- 4 -->
            <button id="q4" class="custom-btn btn-11">How to post?</button>
            <p id="a4" class="" style="display: none;">first you should sign in/up, then you'll find post page
            there you can post your queries</p>
        </div>
    </div>
    <div id="close-chat-box"  value="Toggle" onclick="toggle()">
        Close X
    </div>
    </div>


</div>
<!-- Javascript -->
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
const DivContainer = document.getElementById("box");

const Q1btn = document.querySelector("#q1");
Q1btn.addEventListener("click", Q1, question="qqqqqqq", ansr="aaaaaa");

const Q2btn = document.querySelector("#q2");
Q2btn.addEventListener("click", Q2);

const Q3btn = document.querySelector("#q3");
Q3btn.addEventListener("click", Q3);

const Q4btn = document.querySelector("#q4");
Q4btn.addEventListener("click", Q4);

function Q1() {
    // the question
  const qDiv = document.createElement("div");
  qDiv.classList.add("user");
  qDiv.append("Who are you? | what do you do?");
  DivContainer.appendChild(qDiv);
  //the answer
  const aDiv = document.createElement("div");
  aDiv.classList.add("bot");
  aDiv.append("I’m your virtual assistant here to help ");
  DivContainer.appendChild(aDiv);
  DivContainer.scrollTop = DivContainer.scrollHeight;
}


function Q2() {
    // the question
  const qDiv = document.createElement("div");
  qDiv.classList.add("user");
  qDiv.append("What this website is used for?");
  DivContainer.appendChild(qDiv);
  //the answer
  const aDiv = document.createElement("div");
  aDiv.classList.add("bot");
  aDiv.append("Social College Network is where you can find and share your queries and information");
  DivContainer.appendChild(aDiv);
  DivContainer.scrollTop = DivContainer.scrollHeight;
}


function Q3() {
    // the question
  const qDiv = document.createElement("div");
  qDiv.classList.add("user");
  qDiv.append("How to use the website?");
  DivContainer.appendChild(qDiv);
  //the answer
  const aDiv = document.createElement("div");
  aDiv.classList.add("bot");
  aDiv.append("First you need to sign in and start to interact with other students");
  DivContainer.appendChild(aDiv);
  DivContainer.scrollTop = DivContainer.scrollHeight;
}


function Q4() {
    // the question
  const qDiv = document.createElement("div");
  qDiv.classList.add("user");
  qDiv.append("How to post?");
  DivContainer.appendChild(qDiv);
  //the answer
  const aDiv = document.createElement("div");
  aDiv.classList.add("bot");
  aDiv.append("first you should sign in/up, then you'll find post page there you can post your queries");
  DivContainer.appendChild(aDiv);
  DivContainer.scrollTop = DivContainer.scrollHeight;
}
//show&hide chat box
function toggle () {
  document.getElementById("chat-container").classList.toggle("show");
  document.getElementById("gooey-button").classList.toggle("show");
}
</script>
