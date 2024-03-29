/* range */
function rangeSlider(value) {
  document.getElementById("rangeValue").innerHTML = value;
}

/* range2 */
const inputLeft = document.getElementById("input-left");
const inputRight = document.getElementById("input-right");

const thumbLeft = document.querySelector(".slider > .thumb.left");
const thumbRight = document.querySelector(".slider > .thumb.right");
const range = document.querySelector(".slider > .range");

const setLeftValue = () => {
  const _this = inputLeft;
  const [min, max] = [parseInt(_this.min), parseInt(_this.max)];

  _this.value = Math.min(parseInt(_this.value), parseInt(inputRight.value) - 1);

  const percent = ((_this.value - min) / (max - min)) * 100;
  thumbLeft.style.left = percent + "%";
  range.style.left = percent + "%";
};

const setRightValue = () => {
  const _this = inputRight;
  const [min, max] = [parseInt(_this.min), parseInt(_this.max)];

  _this.value = Math.max(parseInt(_this.value), parseInt(inputLeft.value) + 1);

  const percent = ((_this.value - min) / (max - min)) * 100;
  thumbRight.style.right = 100 - percent + "%";
  range.style.right = 100 - percent + "%";
};

inputLeft.addEventListener("input", setLeftValue);
inputRight.addEventListener("input", setRightValue);

function rangeLeftSlider(value) {
  document.getElementById("range2LeftValue").innerHTML = value;
}
function rangeRightSlider(value) {
  document.getElementById("range2RightValue").innerHTML = value;
}
