describe("POKER", () => {
    it("Test - Brelan", () => {
        cy.visit('/');
        cy.wait(1000);
        cy.get('select#main_carte1').select('8Cœur');
        cy.get('select#main_carte2').select('8Carreau');
        cy.get('select#main_carte3').select('8Pique');
        cy.get('select#main_carte4').select('8Trefle');
        cy.get('select#main_carte5').select('3Carreau');
        cy.get('button#btnJouer').click();
    })
  })