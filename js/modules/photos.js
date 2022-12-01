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
        const container = document.createElement('div')
        container.classList.add('gallery__photo')

        const img = document.createElement('img')
        img.src = photo.file_name
        img.alt = photo.alt_text
        img.width = 600

        const overlay = document.createElement('div')
        overlay.classList.add('overlay')

        const desc = document.createElement('p')
        desc.textContent = photo.desc_text

        container.appendChild(img)

        overlay.appendChild(desc)
        container.appendChild(overlay)

        // add the <img> element to the document
        gallery.appendChild(container)

        // ???

        // profit

    }

})
