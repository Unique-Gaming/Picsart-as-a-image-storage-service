<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHARE OR UPLOAD IMAGE</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: auto;
        }

        .main-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.8);
            box-shadow: 0px 0px 20px #00f;
            padding: 20px;
            border-radius: 10px;
            color: #fff;
            text-align: center;
            max-width: 600px;
            width: 100%;
            position: relative;
            display: flex;
            flex-direction: column; 
            align-items: center;
        }

        .info-message {
            color: #ccc;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .source-code {
            color: #ccc;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .container a {
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            margin-top: 10px;
        }

        .container a img {
            border-radius: 8px;
            width: 50px; 
            height: 40px;
            margin-right: 10px; 
            margin-bottom: 20px;
        }

        .history-button, .info-button {
            background-color: #00f;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            z-index: 2;
        }

        .history-button {
            position: absolute;
            top: 10px;
            left: 10px;
        }

        .info-button {
            position: absolute;
            top: -7px;
            right: 100px;
            background-color: transparent;
            border: none;
            cursor: pointer;
        }

        .info-button img {
            width: 40px;
            height: 40px;
        }

        .tooltip {
            visibility: hidden;
            width: 300px;
            background-color: #000;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            padding: 10px;
            position: absolute;
            z-index: 1;
            top: 50px;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: opacity 0.3s, visibility 0.3s;
        }

        .tooltip.visible {
            visibility: visible;
            opacity: 1;
        }

        .toggle-history-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: green; 
            color: #fff;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            width: 100px;
            height: 30px;
            font-size: 14px;
            text-align: center;
            line-height: 30px;
        }

        .toggle-history-button.disabled {
            background-color: red;
        }

        .image-container {
            margin-top: 20px;
            max-height: 300px;
            overflow-y: auto;
        }

        .image-url-container {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
            overflow-wrap: break-word;
            display: none;
        }

        .image-wrapper {
            margin-bottom: 20px;
            animation: fadeIn 1s ease-in-out;
        }

        .image {
            max-width: 100%;
            max-height: 300px;
            border: 2px solid #00f;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .separator {
            width: 100%;
            height: 1px;
            background-color: #333;
            margin: 20px 0;
        }

        .error {
            color: red;
            margin-top: 10px;
        }

        .image-url {
            color: #ccc;
            margin-top: 10px;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        footer {
            background-color: #000;
            color: #fff;
            padding: 5px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-weight: bold;
        }
        footer a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="container">
            <p class="info-message">Share or Upload images and get a Permanent link to the image</p>
            <a href="https://github.com" target="_blank"> 
                <img src="github.png" alt="GitHub" width="100" height="50"> 
            </a>
        </div>

        <div class="container">
            <button class="history-button" onclick="viewHistory()">History</button>
            <button class="toggle-history-button" id="toggle-history" onclick="toggleHistory()">History On</button>
            <button class="info-button" onclick="toggleTooltip()">
                <img src="information.png" alt="Information">
            </button>
            <span class="tooltip" id="tooltip">This button enables or disables saving image data.</span>

            <h2>Upload Image</h2>
            <form onsubmit="uploadMultipleImages(event)">
                <label for="files">Upload Multiple Images:</label><br>
                <input type="file" id="files" name="files" multiple><br><br>
                <input type="submit" value="Submit" style="background-color: #00f; color: #fff; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;">
            </form>

            <h2>Upload Image by URL</h2>
            <form onsubmit="uploadImageByUrl(event)">
                <label for="file_url">Image URL:</label><br>
                <input type="text" id="file_url" name="file_url" style="width: 100%; padding: 5px; margin-top: 5px;">
                <br><br>
                <input type="submit" value="Submit" style="background-color: #00f; color: #fff; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;">
            </form>

            <div class="image-container" id="image-container"></div>

            <div class="image-url-container" id="image-url-container"></div>
        </div>
        <footer>
            <p>All Credits Reserved By <a href="https://t.me/deco_api" target="_blank">@UniqueGaming</a></p>
        </footer>
    </div>

    <script>
        function getUniqueId() {
            return '_' + Math.random().toString(36).substr(2, 9);
        }

        function setCookie(name, value, days) {
            const d = new Date();
            d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
            const expires = "expires=" + d.toUTCString();
            document.cookie = name + "=" + value + ";" + expires + ";path=/";
        }

        function getCookie(name) {
            const cname = name + "=";
            const decodedCookie = decodeURIComponent(document.cookie);
            const ca = decodedCookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(cname) == 0) {
                    return c.substring(cname.length, c.length);
                }
            }
            return "";
        }

        function viewHistory() {
            window.location.href = "history.php";
        }

        function toggleHistory() {
            const toggleButton = document.getElementById('toggle-history');
            const historyEnabled = toggleButton.classList.toggle('disabled');
            if (historyEnabled) {
                toggleButton.textContent = 'History Off';
                toggleButton.style.backgroundColor = 'red';
            } else {
                toggleButton.textContent = 'History On';
                toggleButton.style.backgroundColor = 'green';
            }
            setCookie('historyEnabled', historyEnabled ? 'false' : 'true', 365);
        }

        function toggleTooltip() {
            const tooltip = document.getElementById('tooltip');
            tooltip.classList.toggle('visible');
        }

        function checkHistoryStatus() {
            const historyStatus = getCookie('historyEnabled');
            const toggleButton = document.getElementById('toggle-history');
            if (historyStatus === 'false') {
                toggleButton.classList.add('disabled');
                toggleButton.textContent = 'History Off';
                toggleButton.style.backgroundColor = 'red';
            } else {
                toggleButton.classList.remove('disabled');
                toggleButton.textContent = 'History On';
                toggleButton.style.backgroundColor = 'green';
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            checkHistoryStatus();
        });

async function uploadMultipleImages(event) {
    event.preventDefault();

    const fileInput = document.getElementById('files');
    const files = fileInput.files;
    const errorContainer = document.getElementById('image-container');

    let userId = getCookie('userid');
    if (!userId) {
        userId = getUniqueId();
        setCookie('userid', userId, 365);
    }

    for (let i = 0; i < files.length; i++) {
        const formData = new FormData();
        formData.append('file', files[i]);
        formData.append('userid', userId);

        try {
            const response = await fetch('uploadfile.php', {
                method: 'POST',
                headers: {
                    'Content': 'file_upload'
                },
                body: formData
            });
            const result = await response.json();
            if (result.result === 'success') {
                displayResult(result.imageurl);
                await saveImageUrl(userId, result.imageurl);
            } else {
                displayError(errorContainer, result.message);                
            }
        } catch (error) {
            console.error('Error uploading file:', error);
        }
    }
} 

async function uploadMultipleImages(event) {
    event.preventDefault();

    const fileInput = document.getElementById('files');
    const files = fileInput.files;
    const errorContainer = document.getElementById('image-container');

    let userId = getCookie('userid');
    if (!userId) {
        userId = getUniqueId();
        setCookie('userid', userId, 365);
    }

    for (let i = 0; i < files.length; i++) {
        const formData = new FormData();
        formData.append('file', files[i]);
        formData.append('userid', userId);

        try {
            const response = await fetch('uploadfile.php', {
                method: 'POST',
                headers: {
                    'Content': 'file_upload'
                },
                body: formData
            });
            const result = await response.json();
            if (result.result === 'success') {
                displayResult(result.imageurl);
                await saveImageUrl(userId, result.imageurl);
            } else {
                displayError(errorContainer, result.message);
            }
        } catch (error) {
            console.error('Error uploading file:', error);
        }
    }
}

async function uploadImageByUrl(event) {
    event.preventDefault();

    const fileUrl = document.getElementById('file_url').value;
    const formData = new FormData();
    const errorContainer = document.getElementById('image-container');

    let userId = getCookie('userid');
    if (!userId) {
        userId = getUniqueId();
        setCookie('userid', userId, 365);
    }

    formData.append('file_url', fileUrl);
    formData.append('userid', userId);

    try {
        const response = await fetch('uploadfile.php', {
            method: 'POST',
            headers: {
                'Content': 'remote_url'
            },
            body: formData
        });
        const result = await response.json();
        if (result.result === 'success') {
            displayResult(result.imageurl);
            await saveImageUrl(userId, result.imageurl);
        } else {
            displayError(errorContainer, result.message);
        }
    } catch (error) {
        console.error('Error uploading file:', error);
    }
}

async function saveImageUrl(userId, imageUrl) {
    const historyEnabled = getCookie('historyEnabled') !== 'false';
    if (!historyEnabled) {
        console.log('History is disabled. Image URL will not be saved.');
        return;
    }

    try {
        await fetch('savehistory.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({
                'userid': userId,
                'imageurl': imageUrl
            })
        });
    } catch (error) {
        console.error('Error saving image URL:', error);
    }
}

    function displayResult(imageUrl) {
        const container = document.getElementById('image-container');
        const imageContainer = document.createElement('div');
        imageContainer.classList.add('image-wrapper');

        const image = document.createElement('img');
        image.src = imageUrl;
        image.classList.add('image');

        const imageUrlElement = document.createElement('p');
        imageUrlElement.textContent = imageUrl;
        imageUrlElement.classList.add('image-url');

        imageContainer.appendChild(image);
        imageContainer.appendChild(imageUrlElement);
        container.appendChild(imageContainer);

        const separator = document.createElement('div');
        separator.classList.add('separator');
        container.appendChild(separator);
    }

    function displayError(container, message) {
        const errorElement = document.createElement('p');
        errorElement.textContent = message;
        errorElement.classList.add('error');
        container.appendChild(errorElement);
    }
</script>

</body>
</html>
