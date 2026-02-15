// Timezone Live Clock (Login Page)
const countrySelect = document.querySelector('select[name="country"]');
const timezoneDisplay = document.getElementById('timezoneDisplay');

if (countrySelect && timezoneDisplay && typeof timezones !== "undefined") {

  function updateTime() {
    const selectedCountry = countrySelect.value;
    const timezone = timezones[selectedCountry];

    if (!timezone) return;

    const now = new Date();

    const options = {
      timeZone: timezone,
      year: 'numeric',
      month: 'long',
      day: 'numeric',
      hour: '2-digit',
      minute: '2-digit',
      second: '2-digit'
    };

    const formatted = now.toLocaleString('en-US', options);

    timezoneDisplay.innerHTML = `
      Current Time in ${selectedCountry}:<br>
      ${formatted}
    `;
  }

  countrySelect.addEventListener('change', updateTime);
  setInterval(updateTime, 1000);
  updateTime();
}




// BMI Calculator
const bmiForm = document.getElementById('bmiForm');
if (bmiForm) {
  bmiForm.addEventListener('submit', function(e) {
    e.preventDefault();
    let height = parseFloat(document.getElementById('height').value) / 100;
    let weight = parseFloat(document.getElementById('weight').value);
    let bmi = (weight / (height * height)).toFixed(1);

    let result = `Your BMI is ${bmi} - `;
    if (bmi < 18.5) result += "Underweight";
    else if (bmi < 24.9) result += "Normal weight";
    else if (bmi < 29.9) result += "Overweight";
    else result += "Obese";

    document.getElementById('bmiResult').innerText = result;
  });
}

// 1RM Calculator
const oneRMForm = document.getElementById("oneRMForm");
if (oneRMForm) {
  oneRMForm.addEventListener("submit", function (e) {
    e.preventDefault();
    const lift = parseFloat(document.getElementById("lift").value);
    const metric = document.getElementById("metric").value;
    const resultDiv = document.getElementById("oneRMResult");

    if (isNaN(lift) || lift <= 0) {
      resultDiv.innerHTML = "<p>Please enter a valid PR.</p>";
      return;
    }

    const percentages = [100, 95, 90, 85, 80, 75, 70, 65, 60, 55, 50];
    const reps = [1, 2, 4, 6, 8, 10, 12, 16, 20, 24, 30];

    let table = `
      <table border="1" cellpadding="8" style="width:100%; margin-top:1rem; text-align:center; border-collapse: collapse;">
        <thead>
          <tr>
            <th>Percentage</th>
            <th>Lift Weight (${metric})</th>
            <th>Reps</th>
          </tr>
        </thead>
        <tbody>
    `;

    percentages.forEach((p, i) => {
      const weight = Math.round(lift * (p / 100));
      table += `
        <tr>
          <td>${p}%</td>
          <td>${weight} ${metric}</td>
          <td>${reps[i]}</td>
        </tr>
      `;
    });

    table += "</tbody></table>";
    resultDiv.innerHTML = table;
  });
}

// Burger menu
const burger = document.getElementById("burger");
const navLinks = document.getElementById("nav-links");

burger.addEventListener("click", () => {
  navLinks.classList.toggle("active");
});

// Dropdown toggle (for mobile)
document.querySelectorAll(".dropdown > a").forEach(dropToggle => {
  dropToggle.addEventListener("click", (e) => {
    e.preventDefault(); // prevent jump
    const parent = dropToggle.parentElement;
    parent.classList.toggle("active");
  });
});

