export default {
    name: "PhotoExport",
    props: ["photoSource"],

    template: `
    <img :src '" ./imgs/photography" + photoSource.photo' alt`
}