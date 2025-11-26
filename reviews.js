// Display reviews on page load
window.addEventListener('DOMContentLoaded', function() {
    displayReviews();
});

function displayReviews() {
    const reviews = JSON.parse(localStorage.getItem('customerReviews')) || [];
    const tbody = document.getElementById('reviewsBody');
    
    if (!tbody) return;
    
    if (reviews.length === 0) {
        tbody.innerHTML = '<tr><td colspan="2">No reviews yet</td></tr>';
        return;
    }
    
    tbody.innerHTML = '';
    reviews.forEach(review => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${review.cname}</td>
            <td>${review.customer}</td>
        `;
        tbody.appendChild(row);
    });
}

// Submit review (for customer-review.html)
document.getElementById('reviewForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const cname = document.getElementById('cname').value;
    const customer = document.getElementById('customer').value;
    
    let reviews = JSON.parse(localStorage.getItem('customerReviews')) || [];
    reviews.push({ cname, customer });
    localStorage.setItem('customerReviews', JSON.stringify(reviews));
    
    document.getElementById('message').textContent = 'Customer Review Added successfully';
    document.getElementById('message').style.color = 'white';
    
    this.reset();
    
    setTimeout(() => {
        window.location.href = 'custview.html';
    }, 1500);
});
