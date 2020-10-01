//Função funcional para exibição pelo javascript mesmo.

function calcula() {
    let N = []
    let quad = []
    let cubo = []
    let fat = []
    for(let i=0;i<=10;i++){
        let res = 1;
        N.push(i);
        quad.push(i*i);
        cubo.push(i*i*i);
        for(let j=i; j>1; j--){
            res *= j;
        }
        fat.push(res);
    }
    console.log("N \t\t ^2 \t\t ^3 \t\t fat");
    for(let i=0;i<=10;i++){
        console.log(`${N[i]} \t\t ${quad[i]} \t\t ${cubo[i]} \t\t ${fat[i]}`);
    }
}

calcula();
