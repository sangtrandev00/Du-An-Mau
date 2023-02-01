


function plusQuantity(number) {
    const rowProductItem = getParent(event.currentTarget,".cart-row");
    const quantity = rowProductItem.querySelector("input[name='quantity']");
    const priceItem = rowProductItem.querySelector(".price-item-input");
    const priceElement = rowProductItem.querySelector(".row-price");

    const priceValue =Number(priceItem.value);
    // console.log(quantity);
    let currentNumber = Number(quantity.value);


    currentNumber+= number;
    
    if(currentNumber <= 1) {
        // document.querySelector(".main-product__quantity-control-item").setAttribute("disabled",true);
        currentNumber = 1;
    }
    console.log('currentNumber',currentNumber);
    console.log('priceItem',priceItem);
    const totalMoneyItem = currentNumber * priceValue;
    console.log('totalMoneyItem',totalMoneyItem);
    quantity.value = currentNumber;
    // const totalMoneyElement = ProductItem.querySelector(".shopping-cart__table-cell--total-item");
    priceElement.innerText = formatter.format(totalMoneyItem);
    rowProductItem.querySelector(".quantity-hidden-item").value = currentNumber;
    const totalMoneyItemHidden = rowProductItem.querySelector(".row-price-input");
    totalMoneyItemHidden.value = totalMoneyItem;
    const totalItemList = Array.from(document.querySelectorAll(".row-price-input"));
    console.log('totalItemList',totalItemList);
    const subtotalAllItem = document.querySelector(".subtotal span");

    // const sumSubTotal = totalItemList.reduce((acc, item) => acc + item.value);
    // console.log('sumSubTotal',sumSubTotal);   
    let sumSubTotal = 0;
    for(const totalItem of totalItemList) {
        sumSubTotal+= Number(totalItem.value);
        console.log(totalItem);
    }

  
    subtotalAllItem.innerText = formatter.format(sumSubTotal);
    // const subtotalAllItemMoney = Number(subtotalAllItem.innerText.substring(1));
    const shippingFee = 5;
    const finalTotalMoney = shippingFee + sumSubTotal;
    const finaltotalAllItem = document.querySelector(".final-total span");
    
    finaltotalAllItem.innerText = formatter.format(finalTotalMoney);
}