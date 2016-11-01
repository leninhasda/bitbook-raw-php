# Instructions for Contributing

## Here is how you get started:
1. `Fork` it in you account
2. `git clone` from you account
3. Add original repo as `upstream`
```
git remote add upstream https://github.com/python-bangladesh/pybd.org.git
```
4. *Recommended:* Create and work in a local dev branch (ex: `dev-lenin`)
5. Before pushing your changes, checkout master branch and pull the latest changes from upstream
```
git checkout master
git pull upstream master
```
6. Goback to your local dev branch (ex: dev-lenin) and `rebase` from master. Resolve any conflicts that may happen in this step
```
git checkout dev-lenin
git rebase master
# resolve conflict if any and commit those
```
7. Push your changes on a new branch into you account
```
git push origin dev-lenin:new-branch-name
```
8. Finally goto your or original repo and make a pull request if everything is ok.

## Some other Guidelines:
0. [Common Git Commands [Bangla]](http://leninhasda.me/%E0%A6%95%E0%A6%AE%E0%A6%A8-%E0%A6%95%E0%A6%BF%E0%A6%9B%E0%A7%81-%E0%A6%97%E0%A6%BF%E0%A6%9F-%E0%A6%95%E0%A6%AE%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%A1-42)
1. [Codeing Style Guide](guide/001-style-guide.md)
2. [Project Structure](guide/002-project-structure.md)
