function validateLogin() {
  const user = document.getElementById("username").value;
  const pass = document.getElementById("password").value;
  if(user === "aqmaAdmin" && pass === "pakAirways2026") {
   window.location.href = "admin_dashboard.html";
  }
  else {
    alert("Invalid credentials!");
  }
}
// Toggle Booking Tabs (Economy, Business, First Class)
document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".booking__nav span");
  const form = document.querySelector(".booking__container form");

  // Default active tab
  let activeTab = "Economy Class";

  tabs.forEach(tab => {
    tab.addEventListener("click", function () {
      // Remove active style from all tabs
      tabs.forEach(t => {
        t.style.backgroundColor = "";
        t.style.color = "#64748b"; // light text
      });

      // Apply active style to clicked tab
      this.style.backgroundColor = "#3d5cb8"; // primary color
      this.style.color = "#ffffff";

      // Update active tab
      activeTab = this.textContent;

      // Change form heading or placeholder based on tab
      updateForm(activeTab);
    });
  });

  function updateForm(tabName) {
    if (tabName === "Economy Class") {
      form.querySelector("button").innerHTML = "Search Economy <i class='ri-search-line'></i>";
    } else if (tabName === "Business Class") {
      form.querySelector("button").innerHTML = "Search Business <i class='ri-search-line'></i>";
    } else if (tabName === "First Class") {
      form.querySelector("button").innerHTML = "Search First Class <i class='ri-search-line'></i>";
    }
  }
});

// Toggle Booking Tabs (Economy, Business, First Class) with fade animation
document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".booking__nav span");
  const economy = document.querySelector(".economy");
  const business = document.querySelector(".business");
  const first = document.querySelector(".first");

  // Helper function for fade in
  function fadeIn(element) {
    element.style.opacity = 0;
    element.style.display = "block";
    let opacity = 0;
    const timer = setInterval(() => {
      if (opacity >= 1) {
        clearInterval(timer);
      }
      element.style.opacity = opacity;
      opacity += 0.05;
    }, 30);
  }

  // Default: show Business Class
  business.style.display = "block";
  business.style.opacity = 1;
  // Default: show Economy Class
  economy.style.display = "block";
  economy.style.opacity = 1;
  // Default: show First Class
  first.style.display = "block";
  first.style.opacity = 1;
  

  tabs.forEach(tab => {
    tab.addEventListener("click", function () {
      // Reset all tabs
      tabs.forEach(t => {
        t.style.backgroundColor = "";
        t.style.color = "#64748b";
      });

      // Highlight clicked tab
      this.style.backgroundColor = "#3d5cb8";
      this.style.color = "#ffffff";

      // Hide all sections
      economy.style.display = "none";
      business.style.display = "none";
      first.style.display = "none";

      // Show selected section with fade animation
      const selected = this.textContent.trim().toLowerCase();
      if (selected.includes("economy")) {
        fadeIn(economy);
      } else if (selected.includes("business")) {
        fadeIn(business);
      } else if (selected.includes("first")) {
        fadeIn(first);
      }
    });
  });
});



// Admin Dashboard - Edit/Delete Traveller
function editTraveller(button) {
  const row = button.parentElement.parentElement;
  const name = row.cells[0].textContent;
  const classType = row.cells[1].textContent;
  const destination = row.cells[2].textContent;

  const newName = prompt("Edit Name:", name);
  const newClassType = prompt("Edit Class Type:", classType);
  const newDestination = prompt("Edit Destination:", destination);

  // Update row with new values
  if (newName) row.cells[0].textContent = newName;
  if (newClassType) row.cells[1].textContent = newClassType;
  if (newDestination) row.cells[2].textContent = newDestination;
}
