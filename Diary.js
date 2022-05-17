const entryForm = document.querySelector(`#entryForm`);
const entryResultsSection = document.querySelector(`#entryResultsSection`);
const entryResultItem = document.querySelector(`.entryResultItem`);
const entryResultRow = document.querySelector(`.entryResultRow`);
const getEntryTitle = document.getElementsByClassName(`entry-text-title`);
const getEntryText = document.getElementsByClassName(`entry-text-box`);
const moodinput = document.getElementById("Mood").value;
const selectElement = document.querySelector("#Mood");

function addEntryToDom(event) {
  event.preventDefault();
  const d = new Date();
  const month = new Array();
  month[0] = "January";
  month[1] = "February";
  month[2] = "March";
  month[3] = "April";
  month[4] = "May";
  month[5] = "June";
  month[6] = "July";
  month[7] = "August";
  month[8] = "September";
  month[9] = "October";
  month[10] = "November";
  month[11] = "December";
  const n = month[d.getMonth()];
  const day = d.getDate();
  const year = d.getFullYear();

  const heading = document.createElement(`h2`);
  heading.className = `heading-results`;
  heading.textContent = `Journal Entries`;
  entryResultRow.insertAdjacentElement(`beforebegin`, heading);

  // Adding Div
  const entryDiv = document.createElement(`div`);
  entryDiv.className = `single-entry-div`;
  entryResultRow.appendChild(entryDiv);

  // Adding Div Element h3
  const entryHeading = document.createElement(`h3`);
  entryHeading.className = `single-entry-heading`;
  entryHeading.textContent = getEntryTitle[0].value;
  entryDiv.appendChild(entryHeading);

  // Adding Emoji
  const entryEmoji = document.createElement(`h2`);
  output = selectElement.value;
  entryEmoji.textContent = output;
  entryDiv.appendChild(entryEmoji);

  // Adding Div Element Date

  const entryDate = document.createElement(`p`);
  entryDate.className = `single-entry-date`;
  if ((getEntryTitle[0].value = getEntryTitle[0].value)) {
    entryDate.textContent = `Date Added: ${day} ${n} ${year}`;
    entryDiv.appendChild(entryDate);
  }

  // Adding Div Element paragraph

  const entryParagraph = document.createElement(`p`);
  entryParagraph.className = `single-entry-text`;
  entryParagraph.textContent = getEntryText[0].value;
  entryDiv.appendChild(entryParagraph);
  getEntryText[0].value = ``;

  // Adding dropdown element
  //        var dd = DropDown(eazyDropdown(["Mood"]))
  //         const entryMood = document.createElement(`div`);
  //         entryMood.className = `single-entry-text`;
  //         entryMood.textContent = getMood.value;
  //         entryDiv.appendChild();
  //         entryCar[0].value = ``;
  // var data =[
  // ]data.filtere( )
  // const filteredArray=r=>r{}
  // console.log(filteredArray)
}

entryForm.addEventListener(`submit`, addEntryToDom);
