<!DOCTYPE html>
<html>
<head>
	<title>Parts of the Body</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}
		
		h1 {
			text-align: center;
			font-size: 2.5rem;
		}
		
		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			margin-top: 2rem;
		}
		
		.part {
			margin: 1rem;
			text-align: center;
			cursor: pointer;
			transition: transform 0.2s ease-in-out;
		}
		
		.part:hover {
			transform: scale(1.1);
		}
		
		.part img {
			width: 150px;
			height: 150px;
			object-fit: cover;
			object-position: center;
			border-radius: 50%;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			margin-bottom: 0.5rem;
		}
		
		.part p {
			font-size: 1.2rem;
			font-weight: bold;
		}
		
		.modal {
			display: none;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: rgba(0, 0, 0, 0.5);
			z-index: 9999;
			overflow: auto;
			padding: 2rem;
		}
		
		.modal-content {
			background-color: #fff;
			border-radius: 10px;
			max-width: 500px;
			margin: 0 auto;
			padding: 2rem;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		}
		
		.modal-header {
			display: flex;
			justify-content: space-between;
			align-items: center;
			margin-bottom: 1rem;
		}
		
		.modal-header h2 {
			font-size: 2rem;
			font-weight: bold;
			margin: 0;
		}
		
		.modal-header button {
			border: none;
			background-color: transparent;
			color: #666;
			font-size: 2rem;
			cursor: pointer;
			transition: color 0.2s ease-in-out;
		}
		
		.modal-header button:hover {
			color: #000;
		}
		
		.modal-body p {
			font-size: 1.5rem;
			line-height: 2rem;
			text-align: justify;
		}
	</style>
</head>
<body>
	<h1>Parts of the Body</h1>
	<div class="container">
		<div class="part" onclick="showModal('head')">
			<img src="https://source.unsplash.com/PYUkOAXgfOE/150x150" alt="Head">
			<p>Head</p>
		</div>
		<div class="part" onclick="showModal('neck')">
			<img src="https://source.unsplash.com/i1jxWpp9yYk/150x150" alt="Neck">
			<p>Neck</p>
		</div>
    <div class="part" onclick="showModal('shoulder')">
			<img src="https://source.unsplash.com/86cKtRdmRy0/150x150" alt="Shoulder">
			<p>Shoulder</p>
		</div>
		<div class="part" onclick="showModal('arm')">
			<img src="https://source.unsplash.com/8jwW5l5gGJk/150x150" alt="Arm">
			<p>Arm</p>
		</div>
		<div class="part" onclick="showModal('elbow')">
			<img src="https://source.unsplash.com/kc-kAgPdflw/150x150" alt="Elbow">
			<p>Elbow</p>
		</div>
		<div class="part" onclick="showModal('wrist')">
			<img src="https://source.unsplash.com/-AfPBrFZtTA/150x150" alt="Wrist">
			<p>Wrist</p>
		</div>
		<div class="part" onclick="showModal('hand')">
			<img src="https://source.unsplash.com/saFZH8U-JdE/150x150" alt="Hand">
			<p>Hand</p>
		</div>
		<div class="part" onclick="showModal('finger')">
			<img src="https://source.unsplash.com/7bIzDZeuSRY/150x150" alt="Finger">
			<p>Finger</p>
		</div>
		<div class="part" onclick="showModal('chest')">
			<img src="https://source.unsplash.com/X5E8z5AKnQE/150x150" alt="Chest">
			<p>Chest</p>
		</div>
		<div class="part" onclick="showModal('abdomen')">
			<img src="https://source.unsplash.com/p9X_v4J4n4U/150x150" alt="Abdomen">
			<p>Abdomen</p>
		</div>
		<div class="part" onclick="showModal('hip')">
			<img src="https://source.unsplash.com/Ugu36vcLT9c/150x150" alt="Hip">
			<p>Hip</p>
		</div>
		<div class="part" onclick="showModal('leg')">
			<img src="https://source.unsplash.com/cRQ2uIiC8LE/150x150" alt="Leg">
			<p>Leg</p>
		</div>
		<div class="part" onclick="showModal('knee')">
			<img src="https://source.unsplash.com/JU6kPAmoZBc/150x150" alt="Knee">
			<p>Knee</p>
		</div>
		<div class="part" onclick="showModal('ankle')">
			<img src="https://source.unsplash.com/yvBFuK7hybA/150x150" alt="Ankle">
			<p>Ankle</p>
		</div>
		<div class="part" onclick="showModal('foot')">
			<img src="https://source.unsplash.com/EGaFhtX-9Mw/150x150" alt="Foot">
			<p>Foot</p>
		</div>
		<div class="part" onclick="showModal('toe')>
    <img src="https://source.unsplash.com/pY-I-K1D3vI/150x150" alt="Toe">
			<p>Toe</p>
		</div>
	</div>
    <!-- Modal -->


<div id="modal" class="modal">
	<div class="modal-content">
		<span class="close" onclick="hideModal()">&times;</span>
		<h2 id="part-name"></h2>
		<img id="part-image" src="" alt="">
		<p id="part-description"></p>
	</div>
</div>

<!-- JavaScript -->
<script>
	// Show modal when a body part is clicked
	function showModal(part) {
		// Get the modal and set its display to block
		var modal = document.getElementById("modal");
		modal.style.display = "block";

		// Get the body part's name, image source, and description
		var name = "";
		var imageSrc = "";
		var description = "";

		if (part == "head") {
			name = "Head";
			imageSrc = "https://source.unsplash.com/UJxDOyGjdu4/500x500";
			description = "The part of the body that contains the brain, eyes, ears, nose, and mouth.";
		} else if (part == "neck") {
			name = "Neck";
			imageSrc = "https://source.unsplash.com/jLxRyJgPQjw/500x500";
			description = "The part of the body that connects the head to the torso.";
		} else if (part == "shoulder") {
			name = "Shoulder";
			imageSrc = "https://source.unsplash.com/86cKtRdmRy0/500x500";
			description = "The joint where the arm connects to the torso.";
		} else if (part == "arm") {
			name = "Arm";
			imageSrc = "https://source.unsplash.com/8jwW5l5gGJk/500x500";
			description = "The upper limb of the body that connects the shoulder to the elbow.";
		} else if (part == "elbow") {
			name = "Elbow";
			imageSrc = "https://source.unsplash.com/kc-kAgPdflw/500x500";
			description = "The joint where the upper arm bone meets the forearm bones.";
		} else if (part == "wrist") {
			name = "Wrist";
			imageSrc = "https://source.unsplash.com/-AfPBrFZtTA/500x500";
			description = "The joint that connects the hand to the forearm.";
		} else if (part == "hand") {
			name = "Hand";
			imageSrc = "https://source.unsplash.com/saFZH8U-JdE/500x500";
			description = "The body part at the end of the arm that includes the fingers and thumb.";
		} else if (part == "finger") {
			name = "Finger";
			imageSrc = "https://source.unsplash.com/7bIzDZeuSRY/500x500";
			description = "One of the five digits on the hand that is used for grasping objects.";
		} else if (part == "chest") {
			name = "Chest";
			imageSrc = "https://source.unsplash.com/X5E8z5AKnQE/500x500";
			description = "The part of the body between the neck and abdomen that houses the heart and lungs.";
    } else if (part == "stomach") {
      name = "Stomach";
      imageSrc = "https://source.unsplash.com/yPZoVLt2QsI/500x500";
      description = "The organ in the body where food is digested.";
    } else if (part == "hip") {
      name = "Hip";
      imageSrc = "https://source.unsplash.com/h9xUJ71cMfI/500x500";
      description = "The joint where the leg connects to the pelvis.";
    } else if (part == "leg") {
      name = "Leg";
      imageSrc = "https://source.unsplash.com/4bSLCmUCU6M/500x500";
      description = "The lower limb of the body that connects the hip to the knee.";
    } else if (part == "knee") {
      name = "Knee";
      imageSrc = "https://source.unsplash.com/IDkGqyYrBzY/500x500";
      description = "The joint where the thigh bone meets the shin bone.";
    } else if (part == "ankle") {
      name = "Ankle";
      imageSrc = "https://source.unsplash.com/MgV8C1MfR6Q/500x500";
      description = "The joint that connects the foot to the leg.";
    } else if (part == "foot") {
      name = "Foot";
      imageSrc = "https://source.unsplash.com/iXc0GCxvj60/500x500";
      description = "The body part at the end of the leg that includes the toes.";
    } else if (part == "toe") {
      name = "Toe";
      imageSrc = "https://source.unsplash.com/pY-I-K1D3vI/500x500";
      description = "One of the five digits on the foot that is used for balance and walking.";
    	// Set the modal's name, image source, and description
		var modalName = document.getElementById("part-name");
		modalName.innerHTML = name;

		var modalImage = document.getElementById("part-image");
		modalImage.src = imageSrc;

		var modalDescription = document.getElementById("part-description");
		modalDescription.innerHTML = description;
	}

	// Hide modal when the close button is clicked
	function hideModal() {
		var modal = document.getElementById("modal");
		modal.style.display = "none";
	}
</script>}
</body>
</html>	
