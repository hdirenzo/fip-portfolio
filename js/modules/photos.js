async function getPhotos() {
    const response = await fetch("php/photos.php", {
        method: "get",
    })

    const photos = await response.json()

    return photos
}

window.addEventListener('load', async function onWindowLoaded() {
    const photos = await getPhotos()
    //////////////////////////////////////////////////////////////
    // for each photo

    // get a reference to the gallery__column <div>
    const gallery = document.querySelector('.gallery__column')

    for (const photo of photos) {
        // create an html <img> element using the file_name and alt_text
        const img = document.createElement('img')
        img.src = photo.file_name
        img.alt = photo.alt_text
        img.classList.add('hoverer')
        img.width = 600

        // add the <img> element to the document
        gallery.appendChild(img)

        // ???

        // profit

    }

})
