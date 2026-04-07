function fetchUser(userId) {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      if (!userId) {
        reject('User error');
      } else {
        resolve({ id: userId, name: 'John' });
      }
    }, 2000);
  });
}

function fetchOrders(userId) {
  return fetchUser(userId)
    .then(user => {
      return new Promise((resolve, reject) => {
        setTimeout(() => {
          if (!user) {
            reject('Orders error');
          } else {
            resolve([
              { id: 1, item: 'Phone' },
              { id: 2, item: 'Laptop' }
            ]);
          }
        }, 3000);
      });
    });
}

async function getUserWithOrders(userId) {
  try {
    const user = await fetchUser(userId);
    console.log('User:', user);

    const orders = await fetchOrders(userId);
    console.log('Orders:', orders);

  } catch (error) {
    console.log('Error:', error);
  }
}

document.getElementById('btn').addEventListener('click', () => {
  getUserWithOrders(1);
});