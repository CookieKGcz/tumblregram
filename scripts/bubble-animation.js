const wrapper = document.getElementById("bubble-wrapper");

const animateBubble = x => {  
  const bubble = document.createElement("div");
  
  bubble.className = "bubble";
  bubble.style.left = `${x}px`;
  
  wrapper.appendChild(bubble);
  
  setTimeout(() => wrapper.removeChild(bubble), 1500);
}
window.onmousemove = e => animateBubble(e.clientX);

//https://www.youtube.com/watch?v=VTw2cUVFl1c