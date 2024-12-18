const flashData = $('.flash-data').data('flashdata');

if(flashData) {
    Swal.fire({
        title: 'Data Berhasil', 
        text: 'Berhasil'+ flashData,
        type: 'success'
    });
}