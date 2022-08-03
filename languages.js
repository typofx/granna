//<a id="Home">Home</a>
//<a id="AboutUS">About Us</a>
//<a id="SignUp">Sign Up</a>
//<a id="LogIn">Log In</a>
//<br>
//<button onclick="English()">EN</button>
//<button onclick="Portugues()">PT</button>

function English() {
    document.getElementById("Home").innerHTML       = "Home";
    document.getElementById("AboutUS").innerHTML    = "About Us";
    document.getElementById("SignUp").innerHTML     = "Sign Up";
    document.getElementById("LogIn").innerHTML      = "Log In";
}

function Portugues() {
    document.getElementById("Home").innerHTML       = "Home";
    document.getElementById("AboutUS").innerHTML    = "Sobre";
    document.getElementById("SignUp").innerHTML     = "Registre-se";
    document.getElementById("LogIn").innerHTML      = "Entre";

}
