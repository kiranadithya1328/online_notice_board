self.addEventListener("install",e=>{
    e.waitUntil(
    caches.open("college-cache").then(cache=>{
    return cache.addAll(["/college_portal/"]);
    })
    );
    });