// Ultimo tweet enviado por @irfe

getTwitters('tweet', { 
id: 'irfe', 
count: 1, 
enableLinks: true, 
ignoreReplies: true, 
clearContents: false,
template: '"%text%"'
});