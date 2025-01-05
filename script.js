document.addEventListener('DOMContentLoaded', function () {

    const fileList = document.getElementById('fileList');
    fetch('getFiles.php')
     .then(response => response.json())
     .then(files => {
            files.forEach(file => {
                const listItem = document.createElement('li');
                const link = document.createElement('a');
                link.href = `download.php?file=${file}`;
                link.textContent = file;
                listItem.appendChild(link);
                fileList.appendChild(listItem);
            });
        });
});
