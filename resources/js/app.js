//
const sevaData = [
  {
    icon: '🍽️',
    title: 'Kalpavriksha Jagannath Seva',
    price: '₹5,00,001',
    benefits: [
        'Prasadam Seva for 25000 visitors',
        'Archana on Jagannath Rath and Pandal',
        'Chappan Bhog Arati Darshan',
        'Chappan Bhog MahaPrasadam Seva',
        'Jagannath Maha Jewellery and Maha Dress',
        'Special Arati Plate & Jagannath Souvenir Gift',
        'VVIP Dinner Prasadam Seva & Jagannath MahaPrasadam Seva Box',
        'Life Membership for One person',
        'One year Back to Godhead Magazine Subscription',
        'Valet Parking',
    ]
  },
  {
    icon: '🌟',
    title: 'Patitpavan Jagannath Seva',
    price: '₹2,50,001',
    benefits: [
        'Prasadam Seva for 12500 visitors',
        'Archana on Jagannath Rath and Pandal',
        'Chappan Bhog Arati Darshan',
        'Chappan Bhog MahaPrasadam Seva',
        'Jagannath Maha Jewellery',
        'Special Arati Plate & Jagannath Souvenir Gift',
        'VVIP Dinner Prasadam Seva & Jagannath MahaPrasadam Seva Box',
        'One year Back to Godhead Magazine Subscription',
        'Valet Parking',
    ]
  },
  {
    icon: '🥇',
    title: 'Nandighosh Jagannath Seva',
    price: '₹1,00,001',
    benefits: [
        'Prasadam Seva for 5000 visitors',
        'Archana on Jagannath Rath and Pandal',
        'Chappan Bhog Arati Darshan',
        'Chappan Bhog MahaPrasadam Seva',
        'Special Arati Plate & Souvenir Gift',
        'VVIP Dinner Prasadam Seva & Jagannath MahaPrasadam Seva Box',
        'One year Back to Godhead Magazine Subscription',
        'Valet Parking',
    ]
  },
  {
    icon: '🥈',
    title: 'Gundicha Mandir Seva',
    price: '₹50,001',
    benefits: [
        'Prasadam Seva for 2500 visitors',
        'Archana on Jagannath Rath and Pandal',
        'Chappan Bhog Arati Darshan',
        'Special Arati Plate & Souvenir Gift',
        'VVIP Dinner Prasadam Seva & Jagannath MahaPrasadam Seva Box',
        'One year Back to Godhead Magazine Subscription',
        'Valet Parking',
    ]
  },
  {
    icon: '🍛',
    title: 'Baladeva Seva',
    price: '₹25,001',
    benefits: [
        'Prasadam Seva for 1250 visitors',
        'Entry for 4 members',
        'Archana on Jagannath Rath',
        'Special Arati Plate & Souvenir Gift',
        'VIP Dinner Prasadam Seva & Jagannath MahaPrasadam Seva Box',
    ]
  },
  {
    icon: '🥗',
    title: 'Subhadra Seva',
    price: '₹11,001',
    benefits: [
        'Prasadam for 550 visitors',
        'Special Arati Plate & Jagannath Gift',
        'VIP Dinner Prasadam Seva & Jagannath MahaPrasadam Seva Box',
        'Special Entry for 4 members',
    ]
  },
  {
    icon: '🫙',
    title: 'Sudarshan Sevak',
    price: '₹5,001',
    benefits: [
        'Prasadam for 250 visitors',
        'Lamp Offerings',
        'Jagannath Photo & MahaPrasadam Seva',
        'Special Entry for 4 members',
        'VIP Dinner Prasadam Seva',
    ]
  },
  {
    icon: '🌸',
    title: 'Neelmadhav Seva',
    price: '₹2,501',
    benefits: [
        'Prasadam for 125 visitors',
        'Lamp Offering',
        'Jagannath Photo & MahaPrasadam Seva',
        'Special Entry for 4 members',
    ]
  },
  {
    icon: '🚩',
    title: 'Srimandir Seva',
    price: '₹1,001',
    benefits: [
        'Lamp Offering',
        'Jagannath Photo & MahaPrasadam Seva',
        'Special Entry for 2 members',
    ]
  }
];

let expanded = false;

function openPanel(idx) {
  const d = sevaData[idx];
  expanded = false;

  document.getElementById('panelIcon').textContent  = d.icon;
  document.getElementById('panelTitle').textContent = d.title;
  document.getElementById('panelPrice').textContent = d.price;

  const list = document.getElementById('benefitsList');
  list.innerHTML = '';

  d.benefits.forEach((b, i) => {
    const li = document.createElement('li');
    if (i >= 5) {
      li.classList.add('extra-item');
      li.style.display = 'none';
    }
    li.style.animationDelay = (i * 0.06) + 's';
    li.innerHTML = `<span class="bul">${i + 1}</span><span>${b}</span>`;
    list.appendChild(li);
  });

  const rmBtn = document.getElementById('readMoreBtn');
  if (d.benefits.length > 5) {
    rmBtn.style.display = 'block';
    rmBtn.textContent   = '+ View all ' + d.benefits.length + ' benefits';
  } else {
    rmBtn.style.display = 'none';
  }

  document.getElementById('overlay').classList.add('active');
  document.getElementById('sevaPanel').classList.add('active');
}

function closePanel() {
  document.getElementById('overlay').classList.remove('active');
  document.getElementById('sevaPanel').classList.remove('active');
}

function toggleReadMore() {
  expanded = !expanded;
  document.querySelectorAll('.extra-item').forEach(el => {
    el.style.display = expanded ? 'flex' : 'none';
  });
  document.getElementById('readMoreBtn').textContent =
    expanded ? '− Show less' : '+ View all benefits';
}

// Close panel on Escape key
document.addEventListener('keydown', e => {
  if (e.key === 'Escape') closePanel();
});


/*fixes to run js in laravel 10 with vite*/
window.openPanel = openPanel;
window.closePanel = closePanel;
window.toggleReadMore = toggleReadMore;


/* Donate button click handler */
// Donation popup logic
const donateOverlay = document.getElementById('donateOverlay');
const donateModal = document.getElementById('donateModal');
const donateModalClose = document.getElementById('donateModalClose');
const donateTriggers = document.querySelectorAll('.js-open-donate');
const donateForm = document.getElementById('donateForm');

function openDonateModal() {
  if (!donateOverlay || !donateModal) return;

  // If your seva panel is open, close it first
  if (typeof closePanel === 'function') {
    closePanel();
  }

  donateOverlay.classList.add('active');
  donateModal.classList.add('active');
  document.body.style.overflow = 'hidden';
}

function closeDonateModal() {
  if (!donateOverlay || !donateModal) return;
  donateOverlay.classList.remove('active');
  donateModal.classList.remove('active');
  document.body.style.overflow = '';
}

donateTriggers.forEach((el) => {
  el.addEventListener('click', (e) => {
    e.preventDefault();
    openDonateModal();
  });
});

if (donateOverlay) {
  donateOverlay.addEventListener('click', closeDonateModal);
}

if (donateModalClose) {
  donateModalClose.addEventListener('click', closeDonateModal);
}

document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    closeDonateModal();
  }
});

if (donateForm) {
  donateForm.addEventListener('submit', (e) => {
    e.preventDefault();
    // Later you can send data to backend here
    closeDonateModal();
  });
}