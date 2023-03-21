<!DOCTYPE html>
<html>
  <head>
    <title>Palabras interrogativas en inglés</title>
    <meta charset="utf-8">
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 20px;
      }
      h1 {
        text-align: center;
      }
      .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
      }
      .question {
        width: 150px;
        height: 150px;
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        margin: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        transition: all 0.2s ease;
      }
      .question:hover {
        transform: scale(1.1);
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
      }
      .question.active {
        background-color: #00bfff;
        color: #fff;
      }
      .definitions-container {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #f0f0f0;
        padding: 20px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        align-items: center;
      }
    </style>
  </head>
  <body>
    <h1>Palabras interrogativas en inglés</h1>
    <div class="container"></div>
    <div class="definitions-container">
      <h2>Definición</h2>
      <div class="definitions"></div>
    </div>
    <script>
      const questions = [
        "What",
        "Where",
        "When",
        "Who",
        "Why",
        "How",
        "How much",
        "How many",
        "How often",
        "How long",
        "How far"
      ];

      const definitions = {
        "What": "Qué",
        "Where": "Dónde",
        "When": "Cuándo",
        "Who": "Quién",
        "Why": "Por qué",
        "How": "Cómo",
        "How much": "Cuánto",
        "How many": "Cuántos",
        "How often": "Con qué frecuencia",
        "How long": "Cuánto tiempo",
        "How far": "A qué distancia"
      };

      const container = document.querySelector(".container");
      const definitionsContainer = document.querySelector(".definitions");

      questions.forEach(question => {
        const div = document.createElement("div");
        div.classList.add("question");
        div.textContent = question;
        div.addEventListener("click", () => {
          container.querySelectorAll(".question").forEach(question => {
            question.classList.remove("active");
          });
          div.classList.add("active");
          const questionWord = div.textContent;
          const definition = definitions[questionWord];
          const definitionEl = document.createElement("p");
          definitionEl.textContent = definition;
          definitionsContainer.innerHTML = "";
          definitionsContainer.appendChild(definitionEl);
        });
        container.appendChild(div);
      });
    </script>
  </body>
</html>