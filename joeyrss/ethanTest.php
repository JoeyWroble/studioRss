<?php 
/* Template Name: Ethan Event's Test*/ 
?>

<!DOCTYPE html>

<style>
  #event-wrapper {
  }

  #events {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
   /*grid-template-columns: 1fr 1fr 40px 20%;*/
    grid-template-rows: auto;
    gap: 20px;
  }

  #events div {
    border: 1px solid #ccc;
    padding: 20px;
  }

  #popup-content{
    display: none;
  }
</style>



<h1>Events Feed</h1>
  <div id="events">

  </div>


</html>

<script>
// Define the URL of the API endpoint
var url = 'https://content.uiowa.edu/api/v1/views/events_api.json?display_id=year&items_per_page=99&filters[place]=588';
// Fetch the data from the API
fetch(url)
  .then(response => response.json())
  .then(responseData => {
    // Log the data to the console
    const data = responseData.events;
    // Get the element with the ID of 'events'
    var events = document.getElementById('events');
    // Loop through the data
    data.forEach(content => {
      console.log(event);
      // Create a new div element
      var div = document.createElement('div');
      // Set the innerHTML of the div element
      div.innerHTML = `
        <h2>${content.event.title}</h2>
        <div id="popup-content">
          <p>${content.event.event_instances[0].event_instance.start}</p>
          <img src="${content.event.media[0].medium_image}" alt="${content.event.media[0].alt_text}" />
          <p>${content.event.address}</p>
          <p>${content.event.description}</p>
        </div>
      `;
      // Append the div element to the 'events' element
      events.appendChild(div);
    });
  });


//onclick function for each event, toggles the display of the popup-content div
document.getElementById('events').addEventListener('click', function(event){
  if(event.target.id === 'popup-content'){
    event.target.style.display = 'none';
  } else {
    var popups = document.querySelectorAll('#popup-content');
    popups.forEach(popup => {
      popup.style.display = 'none';
    });
    event.target.querySelector('#popup-content').style.display = 'block';
  }
});

</script>
