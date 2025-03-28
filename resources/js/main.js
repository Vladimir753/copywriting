document.addEventListener("DOMContentLoaded", function(){
    let intervalId;

    const toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote', 'code-block'],
        ['link', 'image', 'video', 'formula'],

        [{ 'header': 1 }, { 'header': 2 }],               // custom button values
        [{ 'list': 'ordered'}, { 'list': 'bullet' }, { 'list': 'check' }],
        [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
        [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
        [{ 'direction': 'rtl' }],                         // text direction

        [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

        [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
        [{ 'font': [] }],
        [{ 'align': [] }],

        ['clean']                                         // remove formatting button
    ];


    const quill = new Quill("#editor", {
        modules: {
            toolbar: toolbarOptions,

        },
        theme: "snow",
    });

    function fetchData() {
        fetch('/get-message', {
            method: 'GET', // Използваме GET метода
            headers: {
                'Content-Type': 'application/json', // Може да добавиш други хедъри, ако са необходими
                'Accept': 'application/json'
            }
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Грешка при зареждането на данни');
                }
                return response.json(); // Преобразуваме отговорът в JSON
            })
            .then(data => {
                console.log(data);
                if(data.message === null) {
                    return;
                }

                const cleanedText = data.message.replace(/```html|```/g, '').trim();

                // const container = document.getElementById('editor');
                // container.innerHTML = cleanedText;
                // quill.clipboard.dangerouslyPasteHTML(cleanedText);

                document.getElementById('generated-text').innerHTML = cleanedText;

                console.log('Данни:', cleanedText); // Обработваме получените данни
                clearInterval(intervalId); // Спираме интервала след получаване на резултата
            })
            .catch(error => {
                console.error('Грешка:', error);
                clearInterval(intervalId); // Спираме интервала при грешка
            });
    }

// Стартираме интервала, който прави заявка на всяка секунда





    document.getElementById('chat-send-button').addEventListener('click', function() {
        intervalId = setInterval(fetchData, 500);

        const form = document.querySelector("#chat-form");
        const inputs = form.querySelectorAll("input, select, textarea");

        const formValues = {};
        inputs.forEach(input => {
            formValues[input.name] = input.value;
        });


        fetch('/chat', {
            method: 'POST',
            body: JSON.stringify(formValues),
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
        })
            .then(response => {
                console.log(response);
                // if (!response.ok) {
                //     throw new Error('Грешка при зареждането на данни');
                // }
                // return response.json().message; // Преобразуваме отговорът в JSON
            });

        // document.getElementById('question').value = null;
    });

    document.getElementById('btn-view-gen-text').addEventListener('click', function() {
        document.getElementById('fields').classList.add("hidden");
        document.getElementById('editor-panel').classList.remove("hidden");
        document.getElementById('editor-panel').classList.add("inline-block", "height-43vh");

        const divElement = document.getElementById("generated-text");

        quill.clipboard.dangerouslyPasteHTML(divElement.innerHTML);
    });

    document.getElementById('btn-hide-gen-text').addEventListener('click', function() {
        document.getElementById('fields').classList.remove("hidden");
        document.getElementById('editor-panel').classList.add("hidden");
        document.getElementById('editor-panel').classList.remove("inline-block", "height-43vh");
    });

// // Get the modal
// var modal = document.getElementById("myModal");
//
// // Get the button that opens the modal
// var btn = document.getElementById("myBtn");
//
// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];
//
// // When the user clicks on the button, open the modal
// btn.onclick = function() {
//     modal.style.display = "block";
// }
//
// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//     modal.style.display = "none";
// }
//
// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }
});
// document.querySelector('.sidebar-button').addEventListener('click', function() {
//     document.querySelector('.sidebar').classList.toggle('show');
// });



// import {
//     GoogleGenerativeAI,
//     HarmCategory,
//     HarmBlockThreshold
// } from '@google/generative-ai';
//
// console.log(123);
// const apiKey = 'AIzaSyDPS_vsRhcM9PaSj_KoolR4cIOMIDwFO4s'
// // const apiKey = process.env.GEMINI_API_KEY;
// const genAI = new GoogleGenerativeAI(apiKey);
//
// const model = genAI.getGenerativeModel({
//     model: "gemini-2.0-flash",
// });
//
// const generationConfig = {
//     temperature: 1,
//     topP: 0.95,
//     topK: 40,
//     maxOutputTokens: 8192,
//     responseMimeType: "text/plain",
// };
//
// async function run() {
//     const chatSession = model.startChat({
//         generationConfig,
//         history: [
//         ],
//     });
//
//     const result = await chatSession.sendMessage("I want to tell me something good");
//     console.log(result.response.text());
// }
//
// run();
