// Load assets.css dynamically
const cssLink = document.createElement("link");
cssLink.rel = "stylesheet";
cssLink.href = "/assets.css"; // Replace with your correct path
cssLink.type = "text/css";
document.head.appendChild(cssLink);