//  // Function to generate a random integer between min and max (inclusive).
// function getRandomInt(min, max) {
//     return Math.floor(Math.random() * (max - min + 1)) + min;
// }

// // Function to generate 11 random numbers and display them on the page.
// function generateAndDisplayRandomNumbers() {
//     const numbers = [];
//     const numCount = 12;
//     const minNum = 1;
//     const maxNum = 12;

//     // Generate 12 random numbers.
//     for (let i = 0; i < numCount; i++) {
//         const randomNumber = getRandomInt(minNum, maxNum);
//         numbers.push(randomNumber);
//     }

//     // Display the numbers inline in the <p> element with id="randomNumbers".
//     const randomNumbersElement = document.getElementById('randomNumbers');
//     randomNumbersElement.textContent = numbers.join('');
// }

// // Call the function to generate and display random numbers when the page loads.
// window.onload = generateAndDisplayRandomNumbers;
