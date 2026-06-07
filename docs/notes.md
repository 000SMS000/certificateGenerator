## Docker Challenge
The biggest challenge was configuring Laravel to run inside Docker with SQLite support. This was solved by 
installing pdo_sqlite and setting correct file permissions.

## Docker Codes
docker --version
docker build -t certificate-generator .
docker run -p 8000:8000 certificate-generator

## GitHub Learning
I learned how to manage a professional repository structure, write meaningful commits, and use Docker for 
reproducible environments.

## GitHub Codes
git init
git status
git add.
git commit
git push
