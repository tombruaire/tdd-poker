describe("POKER", () => {
    it("Test - Deux Paires", () => {
        cy.visit('/');
        cy.wait(1000);
        cy.get('select#main_carte1').select('8Cœur');
        cy.get('select#main_carte2').select('8Carreau');
        cy.get('select#main_carte3').select('3Cœur');
        cy.get('select#main_carte4').select('3Carreau');
        cy.get('select#main_carte5').select('5Cœur');
        cy.get('button#btnJouer').click();
    })
  })