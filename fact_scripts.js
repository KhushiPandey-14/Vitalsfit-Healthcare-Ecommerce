
const facts = [
    "Did you know? The best exercise for your eyes is to roll them while waiting for your computer to load.",
    "Drinking water can help you lose weight by increasing your metabolism.",
    "Laughing for just 10 to 15 minutes can burn around 40 calories.",
    "Eating a balanced diet rich in fruits, vegetables, and whole grains can reduce the risk of chronic diseases.",
    "Stretching is a great exercise. For example, reaching for the last slice of pizza before someone else grabs it.",
    "Fact: Smelling roses can reduce stress. Funny Twist: Roses: Nature's way of saying:'Inhale relaxation', 'exhale worries'.",
    "Yoga and meditation can help reduce stress and improve mental clarity.",
    " Walking releases endorphins, the 'feel-good' hormones, which can help alleviate stress, anxiety, and improve overall mood.",
    "A 20-minute power nap can provide an energy boost equivalent to consuming 200 milligrams of caffeine, without any of the jitters or potential crash",
    "You're taller in the morning than you are in the evening because the cartilage between your bones compresses throughout the day."
  ];
  
  const factElement = document.getElementById("fact");
  const generateButton = document.getElementById("generate");
  
  generateButton.addEventListener("click", generateRandomFact);
  
  function generateRandomFact() {
    const randomIndex = Math.floor(Math.random() * facts.length);
    factElement.textContent = facts[randomIndex];
  }
  