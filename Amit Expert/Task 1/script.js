const heights = [5 , 4 , 6 , 7 , 5 , 1 , 3 , 7];


const getMaxHeight = (arr) => {
  let mxNum = 0 , count= 0;

  for (let i = 0 ; i < arr.length ; i++)
    if(arr[i] > mxNum) mxNum = arr[i];


  for (let i = 0 ; i < arr.length ; i++)
    if(arr[i] == mxNum) count++;

  return count;
}


console.log(getMaxHeight(heights));
