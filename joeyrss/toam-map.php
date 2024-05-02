<?php 
/* Template Name: Toam Map*/ 
?>

<!doctype html>
<html lang="en" class="no-js">
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Add a title to the page -->
        <title>Translators of the Ancient Mediterranean</title>
        <!-- link to Montserrat font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <!-- link to Orpheus Pro Bold font -->
        <link href="https://db.onlinewebfonts.com/c/81651a191b7129993b0871c834a19600?family=OrpheusPro-Bold" rel="stylesheet">
        <!-- link to Poppins font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">   
        <!-- leaflet css -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
        <!-- for the collapsible sidebar -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />        
        <link rel="stylesheet" href="../wp-content/themes/joeyrss/src/leaflet-sidebar.css" />

        <!-- custom style here -->
        <style type="text/css">
            /* Set the page and body parameters */
            body,
            html {
            margin: 0;
            padding: 0;
            font: 10pt "Helvetica Neue", Arial, Helvetica, sans-serif;
            }
            /* Set map parameters */
            #map {
            position: fixed;
            bottom: 0px;
            width: 100%;
            top: 0px;
            } 
            /* Font styles */
            h1 {
                color: white;
                display: inline-block;
                margin-top: 0.5em;
                margin-bottom: 0.0em;
                margin-left: 0.8em;
                margin-right: 0;
                font-weight: normal;
                font-family: "Montserrat";
            }
            /* Define CSS variables for different font sizes */
            :root {
                --font-size-small: 11px; /* Font size for small screens */
                --font-size-medium: 16px; /* Font size for medium screens */
                --font-size-large: 18px; /* Font size for large screens */
            }
            /* Apply default font size */
            h1 {
                font-size: var(--font-size-medium);
            }
            /* Adjust font size based on screen width */           
            /* For screens smaller than 765px, use the small font size */
            @media (max-width: 764px) {
                h1 {
                    font-size: var(--font-size-large);
                }
            }
            /* Between 765px and 990px, use the small font size */
            @media (min-width: 765px) and (max-width: 989px) {
                h1 {
                    font-size: var(--font-size-small);
                }
            }
            /* For screens larger than 1200px, use the large font size */
            @media (min-width: 1200px) {
                h1 {
                    font-size: var(--font-size-large);
                }
            }
            h2 {
                font-size: 12px;
                color: white;
                display: inline-block;
                margin-top: 0.25em;
                margin-bottom: 0.0em;
                margin-left: 1.0em;
                margin-right: 0;
                font-weight: normal;
                font-family: "Montserrat";
            }
            h4 {
                font-size: 16px;
                margin: 4px;
            }            
            /* custom sidebar css */
                /* sidebar header */
                .sidebar-header {
                    width: 100%;
                    font-family: "OrpheusPro-Bold"; 
                }
                /* sidebar icon */
                i {
                    color: rgb(0, 0, 0);
                }
                /* sidebar about heading */
                .about {
                    color: rgb(0, 0, 0);
                    font-family: "OrpheusPro-Bold"; 
                    font-size: 16px;
                    margin-bottom: 0px;
                    margin-top: 0px;
                    margin-left: 0px;
                }
                /* selection heading */
                .choose {
                    color: rgb(0, 0, 0);
                    font-family: "OrpheusPro-Bold"; 
                    font-size: 16px;
                    margin-bottom: 0px;
                    margin-top: 0px;
                    margin-left: 0px;       
                }
                /* map info */
                .details {
                    font-family: 'Poppins', sans-serif;
                    font-size: 12px;
                    font-weight: normal;
                    margin-bottom: 0px;
                    margin-top: 0px;
                }
                .instructions {
                    font-family: 'Poppins', sans-serif;
                    font-size: 12px;
                    font-weight: normal;
                    margin-bottom: 0px;
                    margin-top: 0px;        
                }
                .content {
                    font-family: 'Poppins', sans-serif;
                    font-size: 12px;
                    font-weight: normal;
                    margin-bottom: 0px;
                    margin-top: 0px;        
                }
                .introbreak {
                    display: block;
                    margin-bottom: 1em;
                }       
                /* collapsible div css */
                .header {
                    display: flex;
                    align-items: center;
                }
                #collapseButton {
                    background: none;
                    border: none;
                    cursor: pointer;
                    font-size: 1rem;
                    color: #333;
                    margin-right: 10px; /* Add some spacing between the button and the h2 element */
                }
                #collapseButton .icon {
                    margin-right: 5px;
                }
            /* End custom sidebar css */        
        </style>
    </head>
    <body>
        <div id="sidebar" class="sidebar collapsed">    
            <div class="sidebar-tabs">
                <ul role="tablist">
                  <li><a href="#home" role="tab"><i class="fa fa-bars"></i></a></li>
                </ul>
            </div> 
            <div class="sidebar-content">
                <div class="sidebar-pane" id="home">
                    <h1 class="sidebar-header">Translators of the Ancient Mediterranean<span class="sidebar-close"><i class="fa fa-caret-left"></i></span></h1><br>
                    <br>
                    <div class="header">
                        <button id="collapseButton"><span class="icon"><i class="fas fa-chevron-up"></i></span></button>
                        <h2 class="about">About This Project</h2>
                    </div>
                    <div id="collapsibleContent">
                        </b><br>
                        <h4 class="details">This project highlights the number of scholars doing interesting and innovative work in the field of translation. It is intended to be a scholarly tool to find new voices and translators. By creating a database of translators that will continue to expand, we hope to shed light on the wide range of work being done and further democratize the field of classical translation.</h4>
                        <br><h4 class="instructions">To use this map, apply one of the radio filters below and any of the three dropdown filters to find a translator of interest. By applying multiple filters, you will narrow down your results. Your selections will automatically generate new markers on the map and scrollable content below. Hover over a marker with your mouse to see the information linked with that return.</h4>
                        <br><h4 class="content">If you would like to add yourself or another translator to the map, please send an email to <a href="michael-hugunin@uiowa.edu">michael-hugunin@uiowa.edu</a> with the name, institutional affiliation, position, email address, translation focus, translation interest, and location (city, state/province, country) of the translator.</h4>
                        <br><i><h4 class="details">Principal Investigator: Adrienne K. Ho Rose, Ph.D.<br>Research Assistant: Michael Hugunin, Ph.D. Student<br>Map Development & Design: Jay Bowen, GIS Specialist<br>Digital Scholarship & Publishing Studio<br>University of Iowa Libraries</h4></i>
                        <p style="padding-bottom:0px"></p>
                    </div>
                    <div id="radio-select">
                        <p>
                        <h2 class="choose" id="options">Choose from the following options.</h2>
                        </p>
                        <input type="radio" id="option-one" name="select" value="option-one" checked>
                        <label for="option-one">All Translators</label><br>

                        <input type="radio" id="option-two" name="select" value="option-two">
                        <label for="option-two">Affiliated Translators</label><br>
              
                        <input type="radio" id="option-three" name="select" value="option-three">
                        <label for="option-three">Independent Translators</label><br>
                    </div>
                    <div id="dropdown-instructions">
                        <p><h2 class="choose">Filter by interest:</h2></p>
                    </div>
                    <form id="map_parameters" name="map_parameters" action="#" accept-charset="utf-8" class="inlineForm">
                        <select id="interest-select" class="div-toggle" data-target=".my-info-1">
                            <option value="0">No interest selected</option>
                        </select>
                    </form>
                    <div id="dropdown-instructions">
                        <p><h2 class="choose">Filter by focus:</h2></p>
                    </div>
                    <form id="map_parameters" name="map_parameters" action="#" accept-charset="utf-8" class="inlineForm">
                        <select id="focus-select" class="div-toggle" data-target=".my-info-1">
                            <option value="0">No focus selected</option>
                        </select>
                    </form>
                    <div id="dropdown-instructions">
                        <p><h2 class="choose">Filter by name:</h2></p>
                    </div>
                    <form id="map_parameters" name="map_parameters" action="#" accept-charset="utf-8" class="inlineForm">
                        <select id="name-select" class="div-toggle" data-target=".my-info-1">
                            <option value="0">No translator selected</option>
                        </select>
                    </form>                    
                    <!-- Add a button to trigger the handleButtonClick() function -->
                    <div id="search-instructions">
                    <p><h2 class="choose">Reset or zoom out.</h2></p>
                    </div>
                        <!-- Wrap the buttons in a container div to control their layout -->
                        <div class="button-container">
                            <button onclick="handleButtonClick()">Reset</button>
                            <button onclick="handleZoomOutClick()">Zoom Out</button>
                        </div>                      
                    </div>
                    <br>
                    <div id="sidebar-info" class="my-info-1">
                        <div id="content-info" class="contentinfo hide"></div>
                    </div>              
                </div>
            </div>                       
        </div>
        <!-- map -->
        <div id="map"></div>
        <!-- leaflet js -->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
        <!-- d3js -->
        <script src="https://d3js.org/d3.v4.min.js"></script>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- chroma -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/chroma-js/1.2.1/chroma.min.js"></script>
        <!-- sidebar -->
        <script src="../wp-content/themes/joeyrss/src/svg-icon.js"></script>
        <script src="../wp-content/themes/joeyrss/src/leaflet-sidebar.js"></script>
        <script src="../wp-content/themes/joeyrss/src/leaflet.activearea.js"></script>
        <!-- javascript below -->            
        <script>
            // Initialize the map
            const map = L.map('map', {
                center: [17.016394922223267, -75],
                zoom: 2
            });
            // add a basemap
            L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
                subdomains: 'abcd',
                maxZoom: 20
            }).addTo(map);
            // Add a scale bar
                L.control.scale({
                position: 'bottomright'
            }).addTo(map);
            // Remove the default zoom control
            map.zoomControl.remove();            
            // Add a sidebar to the map
            const sidebar = L.control.sidebar("sidebar").addTo(map);
            sidebar.open("home");
            // Define the sidebar element 
            const sidebarElement = document.getElementById('sidebar');
            // Code to collapse about content
            const collapseButton = document.getElementById('collapseButton'); // Define the collapse button
            const collapsibleContent = document.getElementById('collapsibleContent'); // Define the collapsible content
            // Add a click event listener to the button
            collapseButton.addEventListener('click', function() {
                // Check if the collapsible content is already open
                if (collapsibleContent.style.display === 'none') {
                    // Show the collapsible content
                    collapsibleContent.style.display = 'block';
                    // Change the button icon
                    collapseButton.innerHTML = '<span class="icon"><i class="fas fa-chevron-up"></i></span>';
                } else {
                    // Hide the collapsible content
                    collapsibleContent.style.display = 'none';
                    // Change the button icon
                    collapseButton.innerHTML = '<span class="icon"><i class="fas fa-chevron-down"></i></span>';
                }
            });         
            // Define an empty array to hold the chapter content
            let chapterContent = [];
            // Define an empty array to hold the translator names
            let names = [];
            // Define an empty array to hold the filtered names
            let filteredNames = [];
            // Define an empty array to hold the translator interests
            let interests = [];
            // Define an empty array to hold the filtered interests
            let filteredInterests = [];
            // Define an empty array to hold the translator focuses
            let focuses = [];
            // Define an empty array to hold the filtered focuses
            let filteredFocuses = [];
            // Declare a global variable to hold the translator locations layer
            let translocLayer;
            // Define an empty layer to hold the selected translators
            const selectedTranslators = L.layerGroup().addTo(map);            
            // define sidebar info
            const info = document.getElementById('content-info');
            // Define the name dropdown menu
            const nameSelect = document.getElementById('name-select');
            // Define the interest dropdown menu
            const interestSelect = document.getElementById('interest-select');   
            // Define the focus dropdown menu
            const focusSelect = document.getElementById('focus-select');

            // Load the data asynchronously
            d3.queue()
                .defer(d3.json, "../wp-content/themes/joeyrss/data/translators-found.geojson") // Load the translators-found data
                .await(drawMap); // Call the drawMap function when the data is loaded

            // Define the drawMap function
            function drawMap(err, translocs) {
                
                const translatorLocs = L.geoJson(translocs, {
                    pointToLayer: function (feature, latlng) {
                        // Create a blue marker
                        return L.marker(latlng, {
                            icon: L.icon({
                                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
                                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                                iconSize: [25, 41],
                                iconAnchor: [12, 41],
                                shadowSize: [41, 41]
                            })
                        });
                    },
                    onEachFeature: function (feature, layer) {
                        // Push the translator name to the names array
                        names.push(feature.properties.Author);
                        // If there is a comma in the interest field, split it into an array
                        if (feature.properties.AOI.includes(',')) {
                            const splitInterests = feature.properties.AOI.split(',');
                            // Loop through the split interests array
                            for (let i = 0; i < splitInterests.length; i++) {
                                // if there is a space at the beginning of the interest, remove the space
                                if (splitInterests[i].charAt(0) === ' ') {
                                    splitInterests[i] = splitInterests[i].substring(1);
                                }
                                // if there is an "and" at the beginning of the interest, remove "and"
                                if (splitInterests[i].substring(0, 3) === 'and') {
                                    splitInterests[i] = splitInterests[i].substring(4);
                                }
                                // Push the split interest to the interests array
                                interests.push(splitInterests[i]);
                            }
                        } else {
                            // Push the interest to the interests array
                            interests.push(feature.properties.AOI);
                        };
                        // If there is a comma in the focus field, split it into an array
                        if (feature.properties.Focus.includes(',')) {
                            const splitFocuses = feature.properties.Focus.split(',');
                            // Loop through the split focuses array
                            for (let i = 0; i < splitFocuses.length; i++) {
                                // if there is a space at the beginning of the focus, remove the space
                                if (splitFocuses[i].charAt(0) === ' ') {
                                    splitFocuses[i] = splitFocuses[i].substring(1);
                                }
                                // if there is an "and" at the beginning of the focus, remove "and"
                                if (splitFocuses[i].substring(0, 3) === 'and') {
                                    splitFocuses[i] = splitFocuses[i].substring(4);
                                }
                                // if an entry is '' remove it
                                if (splitFocuses[i] === '') {
                                    splitFocuses.splice(i, 1);
                                }
                                // Push the split focus to the focuses array
                                focuses.push(splitFocuses[i]);
                            }
                        } else {
                            // Push the focus to the focuses array
                            focuses.push(feature.properties.Focus);
                        };
                        // Add a tooltip to each marker to display the translators' names
                        layer.bindTooltip('<div style="max-width: 250px; width: max-content; white-space: normal;"><b>' + feature.properties.Author + '</b><hr>' + feature.properties.Affiliation + '<br>' + feature.properties.Position + '<br><b>Interest:</b> ' + feature.properties.AOI + '<br><b>Focus:</b> ' + feature.properties.Focus + '<br><b>Contact:</b> ' + feature.properties.Contact);
                        // On mouseover, change the marker color
                        layer.on('mouseover', function(e) {
                            // Change the marker color
                            this.setIcon(L.icon({
                                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-yellow.png',
                                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                                iconSize: [25, 41],
                                iconAnchor: [12, 41],
                                shadowSize: [41, 41]
                            }));
                        });
                        // On mouseout, change the marker color back
                        layer.on('mouseout', function(e) {
                            // Change the marker color
                            this.setIcon(L.icon({
                                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
                                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                                iconSize: [25, 41],
                                iconAnchor: [12, 41],
                                shadowSize: [41, 41]
                            }));
                        });
                    },
                });            
                // Assign the translatorLocs layer to the global translocLayer variable
                translocLayer = translatorLocs;
                // Add the translocLayer to the map
                translocLayer.addTo(map);
                // Fit the map to the translatorLocs bounds
                //map.fitBounds(translatorLocs.getBounds());
                // Reorder the names array alphabetically
                names.sort();
                // Reorder the interests array alphabetically
                interests.sort();
                // Remove duplicate interests from the interests array
                interests = interests.filter(function(item, index) {
                    return interests.indexOf(item) >= index;
                });
                // Reorder the focuses array alphabetically
                focuses.sort();
                // Remove duplicate focuses from the focuses array
                focuses = focuses.filter(function(item, index) {
                    return focuses.indexOf(item) >= index;
                });
                // Add the names array to the dropdown menu
                for (let i = 0; i < names.length; i++) {
                    const opt = names[i];
                    const el = document.createElement("option");
                    el.textContent = opt;
                    el.value = opt;
                    nameSelect.appendChild(el);
                };
                // Add the interests array to the dropdown menu
                for (let i = 0; i < interests.length; i++) {
                    const opt = interests[i];
                    const el = document.createElement("option");
                    el.textContent = opt;
                    el.value = opt;
                    interestSelect.appendChild(el);
                };
                // Add the focuses array to the dropdown menu
                for (let i = 0; i < focuses.length; i++) {
                    const opt = focuses[i];
                    const el = document.createElement("option");
                    el.textContent = opt;
                    el.value = opt;
                    focusSelect.appendChild(el);
                };

                // Ensure that "All Translators" is selected after the page loads
                document.getElementById('option-one').checked = true;
                
                // Add an event listener to the radio buttons
                document.querySelectorAll('input[type=radio]').forEach((radio) => {
                    radio.addEventListener('change', function() {

                        // Remove the translocLayer from the map
                        translocLayer.remove();
                        // Clear the selectedTranslators layer
                        selectedTranslators.clearLayers();
                        // Clear the chapterContent array
                        chapterContent.length = 0;
                        // Clear the dropdown menus
                        interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                        focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                        nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                        // Clear the filtered arrays
                        filteredInterests.length = 0;
                        filteredFocuses.length = 0;
                        filteredNames.length = 0;
                        
                        // If "All Translators" is selected, show all the translators
                        if (document.getElementById('option-one').checked) {
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                
                                // Define the interest
                                const interest = layer.feature.properties.AOI;
                                // Define the focus
                                const focus = layer.feature.properties.Focus;
                                // Define the author
                                const author = layer.feature.properties.Author;

                                // If the translator is affiliated or independent, add the layer to the selectedTranslators layer
                                if (layer.feature.properties.Affiliation == 'Independent' || layer.feature.properties.Affiliation !== 'Independent') {
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    // Add the author to the filteredNames array
                                    filteredNames.push(author);
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };

                            });
                        };

                        // If "Affiliated Translators" is selected, show only affiliated translators
                        if (document.getElementById('option-two').checked) {
                            // Iterate through the translocLayer
                            translocLayer.eachLayer(function(layer) {

                                // Define the interest
                                const interest = layer.feature.properties.AOI;
                                // Define the focus
                                const focus = layer.feature.properties.Focus;
                                // Define the author
                                const author = layer.feature.properties.Author;

                                // If the translator is affiliated, add the layer to the selectedTranslators layer
                                if (layer.feature.properties.Affiliation !== 'Independent') {
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    // Add the author to the filteredNames array
                                    filteredNames.push(author);
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                        };

                        // If "Independent Translators" is selected, show only independent translators
                        if (document.getElementById('option-three').checked) {
                            // Iterate through the translocLayer
                            translocLayer.eachLayer(function(layer) {

                                // Define the interest
                                const interest = layer.feature.properties.AOI;
                                // Define the focus
                                const focus = layer.feature.properties.Focus;
                                // Define the author
                                const author = layer.feature.properties.Author;

                                // If the translator is independent, add the layer to the selectedTranslators layer
                                if (layer.feature.properties.Affiliation == 'Independent') {
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    // Add the author to the filteredNames array
                                    filteredNames.push(author);
                                } else {
                                    // remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                        };

                        // Remove duplicate interests from the filteredInterests array
                        filteredInterests = filteredInterests.filter(function(item, index) {
                            return filteredInterests.indexOf(item) >= index;
                        });

                        // Sort the filteredInterests array alphabetically
                        filteredInterests.sort();

                        // Remove empty strings from the filteredInterests array
                        filteredInterests = filteredInterests.filter(interest => interest !== '');

                        // Add the filteredInterests array to the dropdown menu
                        for (let i = 0; i < filteredInterests.length; i++) {
                            const opt = filteredInterests[i];
                            const el = document.createElement("option");
                            el.textContent = opt;
                            el.value = opt;
                            interestSelect.appendChild(el);
                        };

                        // Remove duplicate focuses from the filteredFocuses array
                        filteredFocuses = filteredFocuses.filter(function(item, index) {
                            return filteredFocuses.indexOf(item) >= index;
                        });

                        // Sort the filteredFocuses array alphabetically
                        filteredFocuses.sort();

                        // Remove empty strings from the filteredFocuses array
                        filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                        // Add the filteredFocuses array to the dropdown menu
                        for (let i = 0; i < filteredFocuses.length; i++) {
                            const opt = filteredFocuses[i];
                            const el = document.createElement("option");
                            el.textContent = opt;
                            el.value = opt;
                            focusSelect.appendChild(el);
                        };
                        
                        // Remove duplicate names from the filteredNames array
                        filteredNames = filteredNames.filter(function(item, index) {
                            return filteredNames.indexOf(item) >= index;
                        });

                        // Sort the filteredNames array alphabetically
                        filteredNames.sort();

                        // Remove empty strings from the filteredNames array
                        filteredNames = filteredNames.filter(name => name !== '');  

                        // Add the filteredNames array to the dropdown menu
                        for (let i = 0; i < filteredNames.length; i++) {
                            const opt = filteredNames[i];
                            const el = document.createElement("option");
                            el.textContent = opt;
                            el.value = opt;
                            nameSelect.appendChild(el);
                        };
                        
                        // Sort chapterContent by "layer.feature.properties.Author"
                        chapterContent.sort(function(a, b) {
                            return a.localeCompare(b);
                        });

                        // Join the chapterContent array, and set it as the innerHTML of the info div
                        info.innerHTML = chapterContent.join('<br>'); 

                    });
                });
                
                // If the user selects an interest
                interestSelect.addEventListener('change', function() {
                        
                    // Remove the translocLayer from the map
                    translocLayer.remove();
                    // Clear the selectedTranslators layer
                    selectedTranslators.clearLayers();
                    // Clear the chapterContent array
                    chapterContent.length = 0;

                    // Check which radio button is selected
                    // If 'All Translators' is selected
                    if (document.getElementById('option-one').checked) {
                        
                        // Check if nothing is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value === '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // Add all the layers to the selectedTranslators layer
                                selectedTranslators.addLayer(layer);
                                // Build out the chapterContent array
                                chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                // Add name to the filteredNames array
                                filteredNames.push(author);
                                // Add focus(es) to the filteredFocuses array
                                if (focus.includes(',')) {
                                    const splitFocuses = focus.split(',');
                                    splitFocuses.forEach(splitFocus => {
                                        filteredFocuses.push(splitFocus.trim());
                                    });
                                } else {
                                    filteredFocuses.push(focus);
                                };
                                // Add interest(s) to the filteredInterests array
                                if (interest.includes(',')) {
                                    const splitInterests = interest.split(',');
                                    splitInterests.forEach(splitInterest => {
                                        filteredInterests.push(splitInterest.trim());
                                    });
                                } else {
                                    filteredInterests.push(interest);
                                };
                            });

                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                            
                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');  

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };                            
                        };

                        // Check if only an interest is selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value === '0') {
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value)) {
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                            
                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');  

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };                            
                        };

                        // Check if an interest and a focus are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value === '0') {
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest and the focus includes the selected focus, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && focus.includes(document.getElementById('focus-select').value)) {
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');  

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };                              
                        };

                        // Check if an interest and a name are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest and the author is the selected author, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && author === document.getElementById('name-select').value) {
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });
                            
                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                        };

                        // Check if an interest, a focus, and a name are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value !== '0') {
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the focus includes the selected focus, and the author is the selected author, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && focus.includes(document.getElementById('focus-select').value) && author === document.getElementById('name-select').value) {
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                        };

                        // Check if only a focus is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value === '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the focus, interest, and author
                                const focus = layer.feature.properties.Focus;
                                const interest = layer.feature.properties.AOI;
                                const author = layer.feature.properties.Author;
                                // If the focus includes the selected focus, add the layer to the selectedTranslators layer
                                if (focus.includes(document.getElementById('focus-select').value)) {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };
                        // Check if a focus and a name are selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the focus, interest, and author
                                const focus = layer.feature.properties.Focus;
                                const interest = layer.feature.properties.AOI;
                                const author = layer.feature.properties.Author;
                                // If the focus includes the selected focus and the author is the selected author, add the layer to the selectedTranslators layer
                                if (focus.includes(document.getElementById('focus-select').value) && author === document.getElementById('name-select').value) {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };
                        };
                        // Check if only a name is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the author is the selected author, add the layer to the selectedTranslators layer
                                if (author === document.getElementById('name-select').value) {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                        };
                    };

                    // If 'Affiliated Translators' is selected
                    if (document.getElementById('option-two').checked) {
                        // Check if nothing is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value === '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the translator is affiliated, add the layer to the selectedTranslators layer
                                if (layer.feature.properties.Affiliation !== 'Independent') {
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    // Add the author to the filteredNames array
                                    filteredNames.push(author);
                                } else {
                                    // remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });

                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if only an interest is selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value === '0') {
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest and the translator is affiliated, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && layer.feature.properties.Affiliation !== 'Independent') {
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if an interest and a focus are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value === '0') {
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the focus includes the selected focus, and the translator is affiliated, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && focus.includes(document.getElementById('focus-select').value) && layer.feature.properties.Affiliation !== 'Independent') {
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if an interest and a name are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the author is the selected author, and the translator is affiliated, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && author === document.getElementById('name-select').value && layer.feature.properties.Affiliation !== 'Independent') {
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                        };

                        // Check if an interest, a focus, and a name are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value !== '0') {
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the focus includes the selected focus, the author is the selected author, and the translator is affiliated, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && focus.includes(document.getElementById('focus-select').value) && author === document.getElementById('name-select').value && layer.feature.properties.Affiliation !== 'Independent') {
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                        };

                        // Check if only a focus is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value === '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the focus, interest, and author
                                const focus = layer.feature.properties.Focus;
                                const interest = layer.feature.properties.AOI;
                                const author = layer.feature.properties.Author;
                                // If the focus includes the selected focus and the translator is affiliated, add the layer to the selectedTranslators layer
                                if (focus.includes(document.getElementById('focus-select').value) && layer.feature.properties.Affiliation !== 'Independent') {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if a focus and a name are selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the focus, interest, and author
                                const focus = layer.feature.properties.Focus;
                                const interest = layer.feature.properties.AOI;
                                const author = layer.feature.properties.Author;
                                // If the focus includes the selected focus and the author is the selected author, add the layer to the selectedTranslators layer
                                if (focus.includes(document.getElementById('focus-select').value) && author === document.getElementById('name-select').value) {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };
                        };

                        // Check if only a name is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the author is the selected author, add the layer to the selectedTranslators layer
                                if (author === document.getElementById('name-select').value) {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                        };
                    };
                    // If 'Independent Translators' is selected
                    if (document.getElementById('option-three').checked) {
                        // Check if nothing is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value === '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the translator is independent, add the layer to the selectedTranslators layer
                                if (layer.feature.properties.Affiliation === 'Independent') {
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    // Add the author to the filteredNames array
                                    filteredNames.push(author);
                                } else {
                                    // remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });

                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if only an interest is selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value === '0') {
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest and the translator is independent, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && layer.feature.properties.Affiliation === 'Independent') {
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if an interest and a focus are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value === '0') {
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the focus includes the selected focus, and the translator is independent, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && focus.includes(document.getElementById('focus-select').value) && layer.feature.properties.Affiliation === 'Independent') {
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if an interest and a name are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the author is the selected author, and the translator is independent, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && author === document.getElementById('name-select').value && layer.feature.properties.Affiliation === 'Independent') {
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                        };

                        // Check if an interest, a focus, and a name are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value !== '0') {
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the focus includes the selected focus, the author is the selected author, and the translator is independent, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && focus.includes(document.getElementById('focus-select').value) && author === document.getElementById('name-select').value && layer.feature.properties.Affiliation === 'Independent') {
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                        };

                        // Check if only a focus is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value === '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the focus, interest, and author
                                const focus = layer.feature.properties.Focus;
                                const interest = layer.feature.properties.AOI;
                                const author = layer.feature.properties.Author;
                                // If the focus includes the selected focus and the translator is independent, add the layer to the selectedTranslators layer
                                if (focus.includes(document.getElementById('focus-select').value) && layer.feature.properties.Affiliation === 'Independent') {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if a focus and a name are selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the focus, interest, and author
                                const focus = layer.feature.properties.Focus;
                                const interest = layer.feature.properties.AOI;
                                const author = layer.feature.properties.Author;
                                // If the focus includes the selected focus and the author is the selected author, add the layer to the selectedTranslators layer
                                if (focus.includes(document.getElementById('focus-select').value) && author === document.getElementById('name-select').value && layer.feature.properties.Affiliation === 'Independent') {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };
                        };

                        // Check if only a name is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the author is the selected author, add the layer to the selectedTranslators layer
                                if (author === document.getElementById('name-select').value && layer.feature.properties.Affiliation === 'Independent') {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTrans
                                    selectedTranslators.removeLayer(layer);
                                };
                            });

                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                        };
                    };

                    // Sort chapterContent by "layer.feature.properties.Author"
                    chapterContent.sort(function(a, b) {
                        return a.localeCompare(b);
                    });

                    // Join the chapterContent array, and set it as the innerHTML of the info div
                    info.innerHTML = chapterContent.join('<br>'); 
                    
                    adjustMapBounds(map, selectedTranslators, sidebarElement);

                });

                // If the user selects a focus
                focusSelect.addEventListener('change', function() {

                    // Remove the translocLayer from the map
                    translocLayer.remove();
                    // Clear the selectedTranslators layer
                    selectedTranslators.clearLayers();
                    // Clear the chapterContent array
                    chapterContent.length = 0;

                    // Check which radio button is selected
                    // If 'All Translators' is selected
                    if (document.getElementById('option-one').checked) {
                        
                        // Check if nothing is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value === '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // Add all the layers to the selectedTranslators layer
                                selectedTranslators.addLayer(layer);
                                // Build out the chapterContent array
                                chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                // Add name to the filteredNames array
                                filteredNames.push(author);
                                // Add focus(es) to the filteredFocuses array
                                if (focus.includes(',')) {
                                    const splitFocuses = focus.split(',');
                                    splitFocuses.forEach(splitFocus => {
                                        filteredFocuses.push(splitFocus.trim());
                                    });
                                } else {
                                    filteredFocuses.push(focus);
                                };
                                // Add interest(s) to the filteredInterests array
                                if (interest.includes(',')) {
                                    const splitInterests = interest.split(',');
                                    splitInterests.forEach(splitInterest => {
                                        filteredInterests.push(splitInterest.trim());
                                    });
                                } else {
                                    filteredInterests.push(interest);
                                };
                            });

                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                            
                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');  

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };                            
                        };

                        // Check if only an interest is selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value === '0') {
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value)) {
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                            
                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');  

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };                            
                        };

                        // Check if an interest and a focus are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value === '0') {
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest and the focus includes the selected focus, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && focus.includes(document.getElementById('focus-select').value)) {
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');  

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };                              
                        };

                        // Check if an interest and a name are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest and the author is the selected author, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && author === document.getElementById('name-select').value) {
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });
                            
                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                        };

                        // Check if an interest, a focus, and a name are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value !== '0') {
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the focus includes the selected focus, and the author is the selected author, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && focus.includes(document.getElementById('focus-select').value) && author === document.getElementById('name-select').value) {
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                        };

                        // Check if only a focus is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value === '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the focus, interest, and author
                                const focus = layer.feature.properties.Focus;
                                const interest = layer.feature.properties.AOI;
                                const author = layer.feature.properties.Author;
                                // If the focus includes the selected focus, add the layer to the selectedTranslators layer
                                if (focus.includes(document.getElementById('focus-select').value)) {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };
                        // Check if a focus and a name are selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the focus, interest, and author
                                const focus = layer.feature.properties.Focus;
                                const interest = layer.feature.properties.AOI;
                                const author = layer.feature.properties.Author;
                                // If the focus includes the selected focus and the author is the selected author, add the layer to the selectedTranslators layer
                                if (focus.includes(document.getElementById('focus-select').value) && author === document.getElementById('name-select').value) {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };
                        };
                        // Check if only a name is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the author is the selected author, add the layer to the selectedTranslators layer
                                if (author === document.getElementById('name-select').value) {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                        };
                    };

                    // If 'Affiliated Translators' is selected
                    if (document.getElementById('option-two').checked) {
                        // Check if nothing is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value === '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the translator is affiliated, add the layer to the selectedTranslators layer
                                if (layer.feature.properties.Affiliation !== 'Independent') {
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    // Add the author to the filteredNames array
                                    filteredNames.push(author);
                                } else {
                                    // remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });

                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if only an interest is selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value === '0') {
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest and the translator is affiliated, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && layer.feature.properties.Affiliation !== 'Independent') {
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if an interest and a focus are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value === '0') {
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the focus includes the selected focus, and the translator is affiliated, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && focus.includes(document.getElementById('focus-select').value) && layer.feature.properties.Affiliation !== 'Independent') {
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if an interest and a name are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the author is the selected author, and the translator is affiliated, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && author === document.getElementById('name-select').value && layer.feature.properties.Affiliation !== 'Independent') {
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                        };

                        // Check if an interest, a focus, and a name are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value !== '0') {
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the focus includes the selected focus, the author is the selected author, and the translator is affiliated, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && focus.includes(document.getElementById('focus-select').value) && author === document.getElementById('name-select').value && layer.feature.properties.Affiliation !== 'Independent') {
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                        };

                        // Check if only a focus is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value === '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the focus, interest, and author
                                const focus = layer.feature.properties.Focus;
                                const interest = layer.feature.properties.AOI;
                                const author = layer.feature.properties.Author;
                                // If the focus includes the selected focus and the translator is affiliated, add the layer to the selectedTranslators layer
                                if (focus.includes(document.getElementById('focus-select').value) && layer.feature.properties.Affiliation !== 'Independent') {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if a focus and a name are selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the focus, interest, and author
                                const focus = layer.feature.properties.Focus;
                                const interest = layer.feature.properties.AOI;
                                const author = layer.feature.properties.Author;
                                // If the focus includes the selected focus and the author is the selected author, add the layer to the selectedTranslators layer
                                if (focus.includes(document.getElementById('focus-select').value) && author === document.getElementById('name-select').value) {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };
                        };

                        // Check if only a name is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the author is the selected author, add the layer to the selectedTranslators layer
                                if (author === document.getElementById('name-select').value) {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                        };
                    };
                    // If 'Independent Translators' is selected
                    if (document.getElementById('option-three').checked) {
                        // Check if nothing is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value === '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the translator is independent, add the layer to the selectedTranslators layer
                                if (layer.feature.properties.Affiliation === 'Independent') {
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    // Add the author to the filteredNames array
                                    filteredNames.push(author);
                                } else {
                                    // remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });

                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if only an interest is selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value === '0') {
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest and the translator is independent, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && layer.feature.properties.Affiliation === 'Independent') {
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if an interest and a focus are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value === '0') {
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the focus includes the selected focus, and the translator is independent, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && focus.includes(document.getElementById('focus-select').value) && layer.feature.properties.Affiliation === 'Independent') {
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if an interest and a name are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the author is the selected author, and the translator is independent, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && author === document.getElementById('name-select').value && layer.feature.properties.Affiliation === 'Independent') {
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                        };

                        // Check if an interest, a focus, and a name are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value !== '0') {
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the focus includes the selected focus, the author is the selected author, and the translator is independent, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && focus.includes(document.getElementById('focus-select').value) && author === document.getElementById('name-select').value && layer.feature.properties.Affiliation === 'Independent') {
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                        };

                        // Check if only a focus is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value === '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the focus, interest, and author
                                const focus = layer.feature.properties.Focus;
                                const interest = layer.feature.properties.AOI;
                                const author = layer.feature.properties.Author;
                                // If the focus includes the selected focus and the translator is independent, add the layer to the selectedTranslators layer
                                if (focus.includes(document.getElementById('focus-select').value) && layer.feature.properties.Affiliation === 'Independent') {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if a focus and a name are selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the focus, interest, and author
                                const focus = layer.feature.properties.Focus;
                                const interest = layer.feature.properties.AOI;
                                const author = layer.feature.properties.Author;
                                // If the focus includes the selected focus and the author is the selected author, add the layer to the selectedTranslators layer
                                if (focus.includes(document.getElementById('focus-select').value) && author === document.getElementById('name-select').value && layer.feature.properties.Affiliation === 'Independent') {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };
                        };

                        // Check if only a name is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the author is the selected author, add the layer to the selectedTranslators layer
                                if (author === document.getElementById('name-select').value && layer.feature.properties.Affiliation === 'Independent') {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTrans
                                    selectedTranslators.removeLayer(layer);
                                };
                            });

                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                        };
                    };

                    // Sort chapterContent by "layer.feature.properties.Author"
                    chapterContent.sort(function(a, b) {
                        return a.localeCompare(b);
                    });

                    // Join the chapterContent array, and set it as the innerHTML of the info div
                    info.innerHTML = chapterContent.join('<br>');

                    adjustMapBounds(map, selectedTranslators, sidebarElement);

                });

                // If the user selects a name
                nameSelect.addEventListener('change', function() {

                    // Remove the translocLayer from the map
                    translocLayer.remove();
                    // Clear the selectedTranslators layer
                    selectedTranslators.clearLayers();
                    // Clear the chapterContent array
                    chapterContent.length = 0;

                    // Check which radio button is selected
                    // If 'All Translators' is selected
                    if (document.getElementById('option-one').checked) {
                        
                        // Check if nothing is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value === '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // Add all the layers to the selectedTranslators layer
                                selectedTranslators.addLayer(layer);
                                // Build out the chapterContent array
                                chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                // Add name to the filteredNames array
                                filteredNames.push(author);
                                // Add focus(es) to the filteredFocuses array
                                if (focus.includes(',')) {
                                    const splitFocuses = focus.split(',');
                                    splitFocuses.forEach(splitFocus => {
                                        filteredFocuses.push(splitFocus.trim());
                                    });
                                } else {
                                    filteredFocuses.push(focus);
                                };
                                // Add interest(s) to the filteredInterests array
                                if (interest.includes(',')) {
                                    const splitInterests = interest.split(',');
                                    splitInterests.forEach(splitInterest => {
                                        filteredInterests.push(splitInterest.trim());
                                    });
                                } else {
                                    filteredInterests.push(interest);
                                };
                            });

                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                            
                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');  

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };                            
                        };

                        // Check if only an interest is selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value === '0') {
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value)) {
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                            
                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');  

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };                            
                        };

                        // Check if an interest and a focus are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value === '0') {
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest and the focus includes the selected focus, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && focus.includes(document.getElementById('focus-select').value)) {
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');  

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };                              
                        };

                        // Check if an interest and a name are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest and the author is the selected author, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && author === document.getElementById('name-select').value) {
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });
                            
                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                        };

                        // Check if an interest, a focus, and a name are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value !== '0') {
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the focus includes the selected focus, and the author is the selected author, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && focus.includes(document.getElementById('focus-select').value) && author === document.getElementById('name-select').value) {
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                        };

                        // Check if only a focus is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value === '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the focus, interest, and author
                                const focus = layer.feature.properties.Focus;
                                const interest = layer.feature.properties.AOI;
                                const author = layer.feature.properties.Author;
                                // If the focus includes the selected focus, add the layer to the selectedTranslators layer
                                if (focus.includes(document.getElementById('focus-select').value)) {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };
                        // Check if a focus and a name are selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the focus, interest, and author
                                const focus = layer.feature.properties.Focus;
                                const interest = layer.feature.properties.AOI;
                                const author = layer.feature.properties.Author;
                                // If the focus includes the selected focus and the author is the selected author, add the layer to the selectedTranslators layer
                                if (focus.includes(document.getElementById('focus-select').value) && author === document.getElementById('name-select').value) {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };
                        };
                        // Check if only a name is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the author is the selected author, add the layer to the selectedTranslators layer
                                if (author === document.getElementById('name-select').value) {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                        };
                    };

                    // If 'Affiliated Translators' is selected
                    if (document.getElementById('option-two').checked) {
                        // Check if nothing is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value === '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the translator is affiliated, add the layer to the selectedTranslators layer
                                if (layer.feature.properties.Affiliation !== 'Independent') {
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    // Add the author to the filteredNames array
                                    filteredNames.push(author);
                                } else {
                                    // remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });

                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if only an interest is selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value === '0') {
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest and the translator is affiliated, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && layer.feature.properties.Affiliation !== 'Independent') {
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if an interest and a focus are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value === '0') {
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the focus includes the selected focus, and the translator is affiliated, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && focus.includes(document.getElementById('focus-select').value) && layer.feature.properties.Affiliation !== 'Independent') {
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if an interest and a name are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the author is the selected author, and the translator is affiliated, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && author === document.getElementById('name-select').value && layer.feature.properties.Affiliation !== 'Independent') {
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                        };

                        // Check if an interest, a focus, and a name are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value !== '0') {
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the focus includes the selected focus, the author is the selected author, and the translator is affiliated, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && focus.includes(document.getElementById('focus-select').value) && author === document.getElementById('name-select').value && layer.feature.properties.Affiliation !== 'Independent') {
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                        };

                        // Check if only a focus is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value === '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the focus, interest, and author
                                const focus = layer.feature.properties.Focus;
                                const interest = layer.feature.properties.AOI;
                                const author = layer.feature.properties.Author;
                                // If the focus includes the selected focus and the translator is affiliated, add the layer to the selectedTranslators layer
                                if (focus.includes(document.getElementById('focus-select').value) && layer.feature.properties.Affiliation !== 'Independent') {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if a focus and a name are selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the focus, interest, and author
                                const focus = layer.feature.properties.Focus;
                                const interest = layer.feature.properties.AOI;
                                const author = layer.feature.properties.Author;
                                // If the focus includes the selected focus and the author is the selected author, add the layer to the selectedTranslators layer
                                if (focus.includes(document.getElementById('focus-select').value) && author === document.getElementById('name-select').value) {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };
                        };

                        // Check if only a name is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the author is the selected author, add the layer to the selectedTranslators layer
                                if (author === document.getElementById('name-select').value) {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                        };
                    };
                    // If 'Independent Translators' is selected
                    if (document.getElementById('option-three').checked) {
                        // Check if nothing is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value === '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the translator is independent, add the layer to the selectedTranslators layer
                                if (layer.feature.properties.Affiliation === 'Independent') {
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    // Add the author to the filteredNames array
                                    filteredNames.push(author);
                                } else {
                                    // remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });

                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if only an interest is selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value === '0') {
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest and the translator is independent, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && layer.feature.properties.Affiliation === 'Independent') {
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if an interest and a focus are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value === '0') {
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the focus includes the selected focus, and the translator is independent, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && focus.includes(document.getElementById('focus-select').value) && layer.feature.properties.Affiliation === 'Independent') {
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if an interest and a name are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the author is the selected author, and the translator is independent, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && author === document.getElementById('name-select').value && layer.feature.properties.Affiliation === 'Independent') {
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                        };

                        // Check if an interest, a focus, and a name are selected
                        if (document.getElementById('interest-select').value !== '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value !== '0') {
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the interest includes the selected interest, the focus includes the selected focus, the author is the selected author, and the translator is independent, add the layer to the selectedTranslators layer
                                if (interest.includes(document.getElementById('interest-select').value) && focus.includes(document.getElementById('focus-select').value) && author === document.getElementById('name-select').value && layer.feature.properties.Affiliation === 'Independent') {
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                        };

                        // Check if only a focus is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value === '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the nameSelect dropdown menu
                            nameSelect.innerHTML = '<option value="0">No translator selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredNames array
                            filteredNames.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the focus, interest, and author
                                const focus = layer.feature.properties.Focus;
                                const interest = layer.feature.properties.AOI;
                                const author = layer.feature.properties.Author;
                                // If the focus includes the selected focus and the translator is independent, add the layer to the selectedTranslators layer
                                if (focus.includes(document.getElementById('focus-select').value) && layer.feature.properties.Affiliation === 'Independent') {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add name to the filteredNames array
                                    filteredNames.push(author);
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate names from the filteredNames array
                            filteredNames = filteredNames.filter(function(item, index) {
                                return filteredNames.indexOf(item) >= index;
                            });

                            // Sort the filteredNames array alphabetically
                            filteredNames.sort();

                            // Remove empty strings from the filteredNames array
                            filteredNames = filteredNames.filter(name => name !== '');

                            // Add the filteredNames array to the dropdown menu
                            for (let i = 0; i < filteredNames.length; i++) {
                                const opt = filteredNames[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                nameSelect.appendChild(el);
                            };
                        };

                        // Check if a focus and a name are selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value !== '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the focus, interest, and author
                                const focus = layer.feature.properties.Focus;
                                const interest = layer.feature.properties.AOI;
                                const author = layer.feature.properties.Author;
                                // If the focus includes the selected focus and the author is the selected author, add the layer to the selectedTranslators layer
                                if (focus.includes(document.getElementById('focus-select').value) && author === document.getElementById('name-select').value && layer.feature.properties.Affiliation === 'Independent') {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTranslators layer
                                    selectedTranslators.removeLayer(layer);
                                };
                            });
                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };
                        };

                        // Check if only a name is selected
                        if (document.getElementById('interest-select').value === '0' && document.getElementById('focus-select').value === '0' && document.getElementById('name-select').value !== '0') {
                            // Clear the interestSelect dropdown menu
                            interestSelect.innerHTML = '<option value="0">No interest selected</option>';
                            // Clear the focusSelect dropdown menu
                            focusSelect.innerHTML = '<option value="0">No focus selected</option>';
                            // Clear the filteredInterests array
                            filteredInterests.length = 0;
                            // Clear the filteredFocuses array
                            filteredFocuses.length = 0;
                            // Iterate through the translocLayer    
                            translocLayer.eachLayer(function(layer) {
                                // Define the interest, focus, and author
                                const interest = layer.feature.properties.AOI;
                                const focus = layer.feature.properties.Focus;
                                const author = layer.feature.properties.Author;
                                // If the author is the selected author, add the layer to the selectedTranslators layer
                                if (author === document.getElementById('name-select').value && layer.feature.properties.Affiliation === 'Independent') {
                                    // Add interest(s) to the filteredInterests array
                                    if (interest.includes(',')) {
                                        const splitInterests = interest.split(',');
                                        splitInterests.forEach(splitInterest => {
                                            filteredInterests.push(splitInterest.trim());
                                        });
                                    } else {
                                        filteredInterests.push(interest);
                                    };
                                    // Add focus(es) to the filteredFocuses array
                                    if (focus.includes(',')) {
                                        const splitFocuses = focus.split(',');
                                        splitFocuses.forEach(splitFocus => {
                                            filteredFocuses.push(splitFocus.trim());
                                        });
                                    } else {
                                        filteredFocuses.push(focus);
                                    };
                                    selectedTranslators.addLayer(layer);
                                    // Build out the chapterContent array
                                    chapterContent.push('<p style="margin-left: 1.4em"><b style="font-size: 12pt">' + layer.feature.properties.Author + '</b><br><br>' + layer.feature.properties.Affiliation + '<br>' + layer.feature.properties.Position + '<br><b>Interest:</b> ' + layer.feature.properties.AOI + '<br><b>Focus:</b> ' + layer.feature.properties.Focus + '<br><b>Contact:</b> ' + layer.feature.properties.Contact + '</p>');
                                } else {
                                    // Else, remove the layer from the selectedTrans
                                    selectedTranslators.removeLayer(layer);
                                };
                            });

                            // Remove duplicate interests from the filteredInterests array
                            filteredInterests = filteredInterests.filter(function(item, index) {
                                return filteredInterests.indexOf(item) >= index;
                            });

                            // Sort the filteredInterests array alphabetically
                            filteredInterests.sort();

                            // Remove empty strings from the filteredInterests array
                            filteredInterests = filteredInterests.filter(interest => interest !== '');

                            // Add the filteredInterests array to the dropdown menu
                            for (let i = 0; i < filteredInterests.length; i++) {
                                const opt = filteredInterests[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                interestSelect.appendChild(el);
                            };

                            // Remove duplicate focuses from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(function(item, index) {
                                return filteredFocuses.indexOf(item) >= index;
                            });

                            // Sort the filteredFocuses array alphabetically
                            filteredFocuses.sort();

                            // Remove empty strings from the filteredFocuses array
                            filteredFocuses = filteredFocuses.filter(focus => focus !== '');

                            // Add the filteredFocuses array to the dropdown menu
                            for (let i = 0; i < filteredFocuses.length; i++) {
                                const opt = filteredFocuses[i];
                                const el = document.createElement("option");
                                el.textContent = opt;
                                el.value = opt;
                                focusSelect.appendChild(el);
                            };
                        };
                    };

                    // Sort chapterContent by "layer.feature.properties.Author"
                    chapterContent.sort(function(a, b) {
                        return a.localeCompare(b);
                    });

                    // Join the chapterContent array, and set it as the innerHTML of the info div
                    info.innerHTML = chapterContent.join('<br>');

                    adjustMapBounds(map, selectedTranslators, sidebarElement);
                                        
                });

                // Listen for a window resize event
                window.addEventListener('resize', function() {
                    adjustMapBounds(map, selectedTranslators, sidebarElement);
                });
                // Listen for a sidebar opening event
                sidebar.on('opening', function(e) {
                    setTimeout(function() {
                        adjustMapBounds(map, selectedTranslators, sidebarElement);
                    }, 510);
                });
                // Listen for a sidebar closing event
                sidebar.on('closing', function(e) {
                    setTimeout(function() {
                        adjustMapBounds(map, selectedTranslators, sidebarElement);
                    }, 510);
                });
            };
            // End drawMap function

            // Define universal functions
            // Define the handleZoomOutClick() function
            function handleZoomOutClick() {
                // Perform the zoom-out operation using fitBounds()
                map.fitBounds(translocLayer.getBounds());
            };
            // Define the handleButtonClick() function
            function handleButtonClick() {
                // Refresh the page
                location.reload();         
            };
            // Define a function to fit markers within the visible window
            function adjustMapBounds(map, selectedTranslators, sidebarElement) {

                // Get the right side of the sidebar
                let sidebarRight = sidebarElement.getBoundingClientRect().right;

                // Reset the map's active area with the new left-hand side
                map.setActiveArea({
                    position: 'absolute',
                    top: '0px',
                    left: sidebarRight + 'px',
                    right: '0px',
                    height: '100%'
                });

                // Using this new left-hand side, fit the map to the markers
                if (selectedTranslators.getLayers().length > 0) {
                    // Initialize an empty LatLngBounds object
                    let bounds = L.latLngBounds();
                    // Loop through the selectedTranslators layer to get the bounds
                    selectedTranslators.eachLayer(function(layer) {
                        bounds.extend(layer.getLatLng());
                    });
                    // Fit the map to the bounds
                    map.fitBounds(bounds);
                };

                // Set the maximum zoom level to 10 if the current zoom level is greater than 10
                if (map.getZoom() > 10) {
                    map.setZoom(10);
                };  
      
            };
            // End universal functions

        </script>
    </body>
</html>