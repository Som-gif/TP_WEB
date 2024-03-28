const myQuestions = [
    {
        question: "Qui a gagné la Coupe du Monde de la FIFA en 2018 ?",
        answers: {
            a: "Brésil",
            b: "France",
            c: "Allemagne"
        },
        correctAnswer: "b"
    },
    {
        question: "Quel club Lionel Messi a-t-il rejoint en 2021 ?",
        answers: {
            a: "Manchester City",
            b: "PSG",
            c: "Barcelone"
        },
        correctAnswer: "b"
    },
    {
        question: "Qui a remporté le Ballon d'Or en 2020 ?",
        answers: {
            a: "Lionel Messi",
            b: "Cristiano Ronaldo",
            c: "Pas de vainqueur"
        },
        correctAnswer: "c"
    }
];

function generateQuiz(questions, quizContainer, submitButton){
    function showQuestions(questions, quizContainer){
        const output = [];
        questions.forEach((currentQuestion, questionNumber) => {
            const answers = [];
            for(letter in currentQuestion.answers){
                answers.push(
                    `<label>
                        <input type="radio" name="question${questionNumber}" value="${letter}">
                        ${letter} :
                        ${currentQuestion.answers[letter]}
                    </label>`
                );
            }
            output.push(
                `<div class="question"> ${currentQuestion.question} </div>
                <div class="answers"> ${answers.join('')} </div>`
            );
        });
        quizContainer.innerHTML = output.join('');
    }

    function showResults(questions, quizContainer){
        const answerContainers = quizContainer.querySelectorAll('.answers');
        let numCorrect = 0;
        questions.forEach((currentQuestion, questionNumber) => {
            const answerContainer = answerContainers[questionNumber];
            const selector = `input[name=question${questionNumber}]:checked`;
            const userAnswer = (answerContainer.querySelector(selector) || {}).value;
            if(userAnswer === currentQuestion.correctAnswer){
                numCorrect++;
            }
        });
        alert('Vous avez ' + numCorrect + ' réponses correctes sur ' + questions.length);
    }

    showQuestions(questions, quizContainer);

    submitButton.onclick = function(){
        showResults(questions, quizContainer);
    }
}
document.addEventListener("DOMContentLoaded", function() {
    const quizContainer = document.getElementById('quiz');
    const submitButton = document.getElementById('submit');
    generateQuiz(myQuestions, quizContainer, submitButton);
})
