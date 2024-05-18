<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Nunito:300,600i");

html {
	margin: 0;
	height: 100%;
	font-family: "Nunito", sans-serif;
}

body {
	min-height: 100%;
	display: flex;
	margin: 0;
	padding: 0px 30px 0;
	color: white;
	background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
		url("https://images.unsplash.com/photo-1420585269105-d908ec316eb3?ixlib=rb-0.3.5&s=318571f5f99a0553a424d0bac20869f2&auto=format&fit=crop&w=750&q=80")
			white no-repeat fixed;
	background-size: cover;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	font-family: "Nunito", sans-serif;
}

.main {
	margin: 30px 0;
	text-align: center;
	margin-bottom: -100px;
}

.main:after {
	content: "";
	display: block;
}

.credits,
.main:after {
	height: 100px;
}

.credits {
	color: #eee;
	text-align: center;
}

.credits a {
	color: #eee;
	text-decoration: none;
}

.credits a:hover,
.credits a:focus,
.credits a.active {
	color: black;
	-webkit-transition: color 0.5s;
	-moz-transition: color 0.5s;
	-o-transition: color 0.5s;
	transition: color 0.5s;
}

.hide {
	display: none;
}

.button,
button {
	display: block;
	margin-bottom: 30px;
	width: 100%;
	text-align: center;
	padding: 10px 0;
	border-radius: 5px;
	border: 1px solid white;
	background-color: transparent;
	font-size: 20px;
	color: white;
	cursor: pointer;
}

.button:hover,
.button:focus,
.button.active,
button:hover,
button:focus,
button.active {
	background-color: white;
	border: 0;
	color: #333;
	-webkit-transition: background-color 0.5s;
	-moz-transition: background-color 0.5s;
	-o-transition: background-color 0.5s;
	transition: background-color 0.5s;
}

input,
textarea {
	width: 100%;
}

input {
	border: 0;
	outline: none;
	display: block;
	color: white;
	font-weight: 400;
	font-size: 22px;
	margin: 0 auto 70px;
	border-bottom: 2px solid white;
	background-color: transparent;
}

textarea {
	box-sizing: border-box;
	display: block;
	outline: none;
	color: white;
	padding: 10px;
	font-weight: 400;
	font-size: 22px;
	margin: 0px auto 70px;
	border-radius: 5px;
	border: 2px solid white;
	background-color: transparent;
	overflow: hidden;
}

::placeholder {
	color: #ddd;
	font-weight: 400;
	font-family: "Nunito", sans-serif;
	opacity: 1;
}

:-ms-input-placeholder {
	color: #ddd;
	font-weight: 400;
	font-family: "Nunito", sans-serif;
}

::-ms-input-placeholder {
	color: #ddd;
	font-weight: 400;
	font-family: "Nunito", sans-serif;
}

#quotes #text {
	max-width: 80vw;
	overflow-x: hidden;
	font-size: 37px;
	margin-top: 60px;
	font-weight: 600;
	font-style: italic;
}

#quotes #author-wrapper {
	text-align: right;
	font-size: 25px;
}

#add-quote p {
	font-size: 30px;
	font-weight: 600;
	text-align: center;
}

#add-quote .buttons {
	margin-bottom: 50px;
}

#add-quote .button {
	border: 0;
	background-color: white;
	color: #333;
	font-weight: 600;
}

#add-quote .button:hover {
	font-weight: 600;
	border: 0;
	background-color: #333;
	color: white;
}

#form-error {
	font-size: 20px !important;
	color: red;
}

@media (min-width: 576px) {
	.button,
	button {
		display: inline;
		padding: 10px 40px;
	}

	.button#add-new-quote,
	.button#submit-quote {
		margin-right: 1rem;
	}
}
@media (min-width: 768px) {
	.main {
		padding: 50px 20px;
	}

	.button#add-new-quote,
	.button#submit-quote {
		margin-right: 5rem;
	}
}
@media (min-width: 992px) {
	.main {
		padding: 50px 150px;
	}
}

    </style>
</head>


<?php  

include_once '../checkAuth.php';

?>

<body>
<div class="main" id="quotes">
	<div class="buttons">
		<a class="button" id="add-new-quote">Add a New Quote</a>
		<a class="button" id="new-quote">Get Another Quote</a>
	</div>
	<p id="text"></p>
	<p id="author-wrapper"> -
		<span id="author"></span>
	</p>
</div>
<div class="main hide" id="add-quote">
	<p>Add a New Quote</p>
	
<form action="">
<input type="text" name="author" id="quote-author" placeholder="Author">
	<p class="hide" id="form-error">Please input a quote.</p>
	<textarea id="add-quote-text" rows='2' name="quote" maxLength="400" placeholder="Quote"></textarea>
	<div class="buttons">
		<a class="button" type="submit" id="submit-quote">Add New Quote</a>
		<a class="button" id="new-quote-2">Back to Quotes</a>
	</div>
</form>


</div>
<footer class="credits">
	<p>Made with love by
		<a href="index.php">@ABS QUOTES</a>.
	</p>
	<p id="photo-credit">  ABS Quotes  </p>

    <a href="index.php">
    <button>
        back to home
    </button>
    </a>

</footer>
</body>
</html>



<script>
    const quotesWrapper = document.getElementById("quotes");
const addQuoteWrapper = document.getElementById("add-quote");
const addQuoteBtn = document.getElementById("add-new-quote");
const newQuoteBtn = document.getElementById("new-quote");
const newQuoteBtn2 = document.getElementById("new-quote-2");
const submitQuoteBtn = document.getElementById("submit-quote");
const textbox = document.getElementById("add-quote-text");
const authorElem = document.getElementById("quote-author");
const formError = document.getElementById("form-error");
let tempQuotesArray, tempImagesArray, currentQuoteIndex, currentImageIndex;


 




const quotesArray = [  
    


{ quote: "Peace begins with a smile", author: "Mother Teresa" },
{
    quote: "There's nothing more permanent than a temporary hack",
    author: "Kyle Simpson"
},
{
    quote: "It does not matter how slowly you go, so long as you do not stop.",
    author: "Confucius"
},
{
    quote:
        "Things work out best for those who make the best of how things work out.",
    author: "John Wooden"
},
{
    quote:
        "If you are not willing to risk the usual, you will have to settle for the ordinary.",
    author: "Jim Rohn"
},
{
    quote:
        "Success is most often achieved by those who don't know that failure is inevitable",
    author: "Coco Chanel"
},
{
    quote:
        "Learn from yesterday, live for today, hope for tomorrow. The important thing is not to stop questioning.",
    author: "Albert Einstein"
},
{
    quote: `Technology is nothing. What's important is that you have a faith in people, that they're basicaally good and 
smart, and that if you give them tools, they'll do wonderful things with them.`,
    author: "Steve Jobs"
},
{
    quote: `Take up one idea. Make that one idea your life -- think of it, dream of it, live on that idea. Let the brain,
muscles, nerves, every part of your body be full of that idea, and just leave every other idea alone. 
This is the way to success`,
    author: "Swami Vivekananda"
}
];


async function fetchQuotes() {
            try {
                const response = await fetch('getQuote.php');
                const dynamicQuotes = await response.json();
                if (dynamicQuotes.error) {
                    console.error(dynamicQuotes.error);
                } else {
                    quotesArray.push(...dynamicQuotes);
                    console.log(quotesArray); // Display the updated quotesArray
                }
            } catch (error) {
                console.log('Error fetching quotes:', error);
            }
        }

        fetchQuotes();

const imagesArray = [
	{
		imageURL:
			"https://images.unsplash.com/photo-1505319883811-74463eb8c32b?ixlib=rb-0.3.5&s=cf4e722dfe2aefe52d5ce940c477fc41&auto=format&fit=crop&w=1500&q=80",
		credit: " "
	},
	{
		imageURL:
			"https://images.unsplash.com/photo-1500622944204-b135684e99fd?ixlib=rb-0.3.5&s=41682f2ef3700747ffc529ea5d9fd99a&auto=format&fit=crop&w=1001&q=80",
		credit: ""
	},
	{
		imageURL:
			"https://images.unsplash.com/photo-1502082553048-f009c37129b9?ixlib=rb-0.3.5&s=e5ce22bc0db4bd867f85798d67c1dfdd&auto=format&fit=crop&w=1500&q=80",
		credit: ""
	},
	{
		imageURL:
			"https://images.unsplash.com/photo-1504292341394-5c8444920887?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b07c518227ba466a4b7fcab9c9454322&auto=format&fit=crop&w=750&q=80",
		credit: ""
	},
	{
		imageURL:
			"https://images.unsplash.com/41/2MwGKhLETRSQoHP9UWE4_IMG_1348-3.jpg?ixlib=rb-0.3.5&s=485db3810e770770cddbd9fb94c8d7c6&auto=format&fit=crop&w=750&q=80",
		credit: ""
	},
	{
		imageURL:
			"https://images.unsplash.com/photo-1464974196937-6e6220ad7247?ixlib=rb-0.3.5&s=7fc32892392307e8dc993c2ea28d1c7a&auto=format&fit=crop&w=750&q=80",
		credit: ""
	},
	{
		imageURL:
			"https://images.unsplash.com/photo-1504292341394-5c8444920887?ixlib=rb-0.3.5&s=c78bb1b7e788dc5bfbc8af95c968c804&auto=format&fit=crop&w=750&q=80",
		credit: ""
	},
	{
		imageURL:
			"https://images.unsplash.com/photo-1519413016318-6b13004dc95b?ixlib=rb-0.3.5&s=410394e2c966c61927d80a79b2b11b35&auto=format&fit=crop&w=667&q=80",
		credit: ""
	},
	{
		imageURL:
			"https://images.unsplash.com/photo-1504626835342-6b01071d182e?ixlib=rb-0.3.5&s=c453eef008859e8178156d3e977494e2&auto=format&fit=crop&w=751&q=80",
		credit: ""
	},
	{
		imageURL:
			"https://images.unsplash.com/photo-1505245208761-ba872912fac0?ixlib=rb-0.3.5&s=36e3b0c0dd55599d5cf31af30905f7ab&auto=format&fit=crop&w=750&q=80",
		credit: ""
	},
	{
		imageURL:
			"https://images.unsplash.com/uploads/141202616623001715bb7/c1b3b9b0?ixlib=rb-0.3.5&s=0ec689e4a4a33110315bd7846be5bb3e&auto=format&fit=crop&w=794&q=80",
		credit: ""
	},
	{
		imageURL:
			"https://images.unsplash.com/photo-1501854140801-50d01698950b?ixlib=rb-0.3.5&s=3e748d1ca0fb137df28bd5ab74250e07&auto=format&fit=crop&w=840&q=80",
		credit: ""
	},
	{
		imageURL:
			"https://images.unsplash.com/photo-1448375240586-882707db888b?ixlib=rb-0.3.5&s=400fa08e5a6fef0e64cfd93bd80f9d2f&auto=format&fit=crop&w=750&q=80",
		credit: ""
	},
	{
		imageURL:
			"https://images.unsplash.com/photo-1456750695228-762f8db965a4?ixlib=rb-0.3.5&s=cf95678b694c423b73620f485d7db9e8&auto=format&fit=crop&w=751&q=80",
		credit: ""
	},
	{
		imageURL:
			"https://images.unsplash.com/photo-1420585269105-d908ec316eb3?ixlib=rb-0.3.5&s=318571f5f99a0553a424d0bac20869f2&auto=format&fit=crop&w=750&q=80",
		credit: ""
	}
];

document.body.onload = getNewQuote();

addQuoteBtn.onclick = function() {
	if (!textbox.value.trim()) {
		// reinitialize form if textbox contains no value
		reintializeForm();
	}

	// show add quotes form and hide quotes view
	addQuoteWrapper.classList.remove("hide");
	quotesWrapper.classList.add("hide");
};

newQuoteBtn.onclick = getNewQuote;

newQuoteBtn2.onclick = getNewQuote;

textbox.onfocus = function() {
	// get the baseScrollHeight
	this.baseScrollHeight = getBaseScrollHeight(textbox);

	// reinitialize textbox border color and hide error incase of former errors
	this.style.borderColor = "white";
	formError.classList.add("hide");
};

textbox.oninput = function() {
	// calculate rows as (currentScrollHeight - baseScrollHeight) / Math.ceil(font-size * line-height)
	this.rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 25);
};

submitQuoteBtn.onclick = function() {
	const quote = textbox.value.trim();

	// if no author is provided, make author Anonymous
	const author = !authorElem.value.trim() ? "Anonymous" : authorElem.value;

	if (!quote) {
		// show form error if empty textbox was submitted
		formError.classList.remove("hide");
		textbox.style.borderColor = "red";
	} else {
		// submit quote and reinitialize form
		const quoteObject = { author, quote };
		submitQuote(quoteObject);
		reintializeForm();
	}
};

/**
 * Calculates scroll height of input element when it is empty
 * @param {DOM Element} textbox
 * @returns {number} baseScrollHeight
 */
function getBaseScrollHeight(textbox) {
	// store textbox value in temp variable savedValue
	let savedValue = textbox.value;
	// empty texbox and calculate height of textbox
	textbox.value = "";
	let baseScrollHeight = textbox.scrollHeight;
	// return value to textbox
	textbox.value = savedValue;
	return baseScrollHeight;
}

/**
 * Gets Random Object
 * @param {array} arr - array to get object from
 * @param {array} temp - temp array
 * @returns {object} newQuote
 */
function getRandomObject(arr, temp) {
	// copy array of objects to temp array if temp is undefined or empty
	if (temp === undefined || temp.length === 0) {
		temp = Array.from(arr);
	}

	// generate object at random index in temp array
	const index = Math.floor(Math.random() * temp.length);
	const obj = temp[index];
	// remove object from temp array to avoid repetitive values
	temp.splice(index, 1);

	return { obj, temp };
}

/**
 * Gets New Quote
 * @returns {nothing} - returns nothing
 */
function getNewQuote() {
	const quoteObject = getRandomObject(quotesArray, tempQuotesArray);
	const imageObject = getRandomObject(imagesArray, tempImagesArray);

	tempQuotesArray = quoteObject.temp;
	tempImagesArray = imageObject.temp;
	updateElements(quoteObject.obj, imageObject.obj);
}

/**
 * Reinitailizes Form
 * @returns {nothing} - returns nothing
 */
function reintializeForm() {
	textbox.rows = 2;
	textbox.value = "";
	authorElem.value = "";
	formError.classList.add("hide");
	textbox.style.borderColor = "white";
	textbox.placeholder = "Quote";
}

/**
 * Updates DOM Elements
 * @param {object} quoteObject - quote object
 * @param {object} imageObject - image object
 * @returns {nothing} - returns nothing
 */
function updateElements(quoteObject, imageObject) {
	addQuoteWrapper.classList.add("hide");
	quotesWrapper.classList.remove("hide");
	// update DOM elements to reflect selected quotes object
	document
		.getElementById("text")
		.animate([{ opacity: 0 }, { opacity: 1 }], { duration: 1000 });
	document
		.getElementById("author-wrapper")
		.animate([{ opacity: 0 }, { opacity: 1 }], { duration: 1000 });
	document.getElementById("text").textContent = quoteObject.quote;
	document.getElementById("author").textContent = quoteObject.author;
	document.getElementById("photo-credit").textContent = imageObject.credit;
	document.body.style.backgroundImage = `linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(${
		imageObject.imageURL
	})`;
}

/**
 * Submits Quote
 * @param {object} quoteObj - quote object
 * @returns {nothing} returns nothing
 */
function submitQuote(quoteObj) {
	// push quote object to quotes array
	quotesArray.push(quoteObj);

	// generate new random image and update DOM
	const imageObject = getRandomObject(imagesArray, tempImagesArray);
	tempImagesArray = imageObject.temp;

	updateElements(quoteObj, imageObject.obj);
}

</script>