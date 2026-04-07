function fetchWithTimeout(url, timeout) {
  return Promise.race([
    fetch(url),
    new Promise((_, reject) =>
      setTimeout(() => reject('Request timeout'), timeout)
    )
  ]);
}

async function getData() {
  const results = await Promise.allSettled([
    fetchWithTimeout('https://jsonplaceholder.typicode.com/posts/1', 2000),
    fetchWithTimeout('https://jsonplaceholder.typicode.com/users/1', 2000)
  ]);

  const data = results.map(res => {
    if (res.status === 'rejected') {
      return 'Request timeout';
    }
    return res.value.json();
  });

  console.log(await Promise.all(data));
}

document.getElementById('btn').addEventListener('click', getData);